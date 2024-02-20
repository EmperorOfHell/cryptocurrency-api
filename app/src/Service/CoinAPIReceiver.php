<?php

namespace App\Service;

class CoinAPIReceiver
{
    private const KEY = 'DBA49A9C-1FC9-4810-B108-338C13A4C46B';
    static public function receive($currency,$start_date, $end_date)
    {
        $curl = curl_init();

        $url = "https://rest.coinapi.io/v1/exchangerate/BTC/$currency/history?period_id=1HRS&time_start=$start_date&time_end=$end_date";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Accept: text/plain',
                "X-CoinAPI-Key:" . self::KEY
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, true);
 }
}