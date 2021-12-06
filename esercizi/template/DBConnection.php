<?php
include "autoloader.php";

class DBConnection
{
    private static DBConnection $instance;

    private mysqli $connection;

    private function __construct() {
        $this->initConnection();
        $this->setupDb();
    }

    public static function getInstance() : DBConnection {
        if (!isset(self::$instance))
            self::$instance = new DBConnection();

        return self::$instance;
    }


    private function initConnection() {
        $this->connection = new mysqli(Config::dbHost, Config::dbUser, Config::dbPassword, Config::dbName);
    }

    private function setupDb() {
        $querySetup = file_get_contents("./db_scripts/db_init.sql");
        $this->connection->multi_query($querySetup);
    }


    public function getConnection(): mysqli
    {
        return $this->connection;
    }
}