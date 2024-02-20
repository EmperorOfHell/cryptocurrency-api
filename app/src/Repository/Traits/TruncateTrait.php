<?php

namespace App\Repository\Traits;

use Doctrine\DBAL\Exception;

trait TruncateTrait
{
    public function truncate(): void
    {
        $connection = $this->getEntityManager()->getConnection();
        $tableName = $this->getClassMetadata()->getTableName();
        try {
            $connection->beginTransaction();
            $connection->executeQuery("DELETE FROM {$tableName}");
            $connection->commit();
            $connection->executeQuery("ALTER TABLE {$tableName} AUTO_INCREMENT = 1");
        } catch (Exception $e) {
            $connection->rollback();
        }
    }
}