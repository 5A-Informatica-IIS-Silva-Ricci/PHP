<?php

namespace mas\logica\db;

use mas\config\DbConfig;
use mysqli;

class DbManager {
    private static DbManager $instance;

    private mysqli $connection;

    private function __construct() {
        $this->initConnection();
        $this->setupDb();
    }

    public static function getInstance() : DbManager {
        if (!isset(self::$instance))
            self::$instance = new DbManager();

        return self::$instance;
    }


    private function initConnection() {
        $this->connection = new mysqli(DbConfig::DATABASE, DbConfig::USER, DbConfig::PASSWORD, DbConfig::DATABASE);
    }

    private function setupDb() {
        $querySetup = file_get_contents("../../database/db_init.sql");
        $this->connection->multi_query($querySetup);
    }


    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}