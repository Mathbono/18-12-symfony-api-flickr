<?php
namespace App\Model;

use App\infrastructure\Database;

class CustomerManagerModel
{
    public function findByCountry($country)
    {
        $db = new Database();
        return $db->query(
            'SELECT * FROM customers WHERE country = ?',
            [$country]
        );
    }
}