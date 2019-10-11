<?php
namespace App\Infrastructure;

use PDO;

class Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO
        (
            'mysql:host=localhost;dbname=classicmodels',
            'root',
            ''
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function executeSql($sql, array $values = array(), $checkExecution = true)
    {
        $query = $this->pdo->prepare($sql);
        $hasExecuted = $query->execute($values);
        if ($checkExecution == true)
        {
            return $hasExecuted;
        }
        return $this->pdo->lastInsertId();
    }

    public function query($sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($criteria);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryOne($sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($criteria);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}