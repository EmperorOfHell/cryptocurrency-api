<?php
// src/Controller/CryptoCurrencyController.php
namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Service\CoinAPIReceiver;
use App\Service\CurrencyResolver;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\JsonFormatter;

#[Route('/api')]
class CryptoCurrencyController extends AbstractController
{

    #[Route('/cryptorate/{currency}', methods: 'PATCH')]
    public function updateExchangeRate(
        EntityManagerInterface $em,
        string                 $currency,
        #[MapQueryParameter] string $start_date = null,
        #[MapQueryParameter] string $end_date = null,
    )
    {
        $json = new JsonFormatter();

        if (!(CurrencyResolver::isCurrencyAvailable($currency))) {
            return $json->error('This currency is not available')->get();
        }

        if (!($start_date and $end_date)){
            return $this->json($json->error('Query parameters \'start_date\' and \'end_date\' are required', 418)->get());
        }


        $objs = CoinAPIReceiver::receive(strtoupper($currency), $start_date, $end_date);

        if (isset($objs['error'])){
            return $this->json($json->error($objs['error'])->get());
        }

        $em->getRepository(CurrencyResolver::getEntityClass($currency))->truncate();

        foreach ($objs as $obj) {
            $curr = CurrencyResolver::resolve($currency);
            $curr->setTime(new \DateTimeImmutable($obj['time_open']));
            $curr->setRate($obj['rate_open']);
            $em->persist($curr);
        }

        $em->flush();
        return $this->json($json->get());
    }

    #[Route('/cryptorate/{currency}', methods: 'GET')]
    public function getExchangeRate(
        EntityManagerInterface      $em,
                                    $currency,
        #[MapQueryParameter] string $start_date = 'yesterday',
        #[MapQueryParameter] string $end_date = 'now',
    )
    {
        $json = new JsonFormatter();

        if (!(CurrencyResolver::isCurrencyAvailable($currency))) {
            return $this->json($json->error('This currency is not available')->get());
        }


        $start_date = (new \DateTimeImmutable)->setTimestamp(strtotime( $start_date));
        $end_date = (new \DateTimeImmutable)->setTimestamp(strtotime( $end_date));

        $objs = $em->getRepository(CurrencyResolver::getEntityClass($currency))->getBetweenDates($start_date, $end_date);
        $data = [];
        foreach ($objs as $obj){
            $data[] = [
              'date' => $obj->getTime(),
              'rate' => $obj->getRate()
            ];
        }
        $json->bulkData($data);
        return $this->json($json->get());
    }

}