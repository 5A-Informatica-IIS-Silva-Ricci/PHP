<?php

class Db_Manager
{
    CONST db = "primo";
    CONST db_host = "localhost";
    CONST db_user = "root";
    CONST db_password = "";

    var $connection = null;
    public function __construct()
    {
        $this->connection = new mysqli(self::db_host, self::db_user, self::db_password, self::db);
        if ($this->connection->connect_error) {
            die("Si è verificato un errore: ". $this->connection->connect_error);
        }
    }

    public function lista() {
        // interrogazione db
        return $this->connection->query("SELECT * FROM articoli");
    }

    public function singolo($id) {
        return $this->connection->query("SELECT * FROM articoli WHERE id=$id");
    }
}