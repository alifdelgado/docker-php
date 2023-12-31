<?php

namespace App\Repository;

use App\Database\Connection;
use PDO;

abstract class Repository
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getPDO();
    }
}
