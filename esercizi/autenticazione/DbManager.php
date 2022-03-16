<?php

class DbManager
{
    CONST db_host = "localhost";
    CONST db_user = "root";
    CONST db_password = "password";
    CONST db_name = "autenticazione";

    private static ?DbManager $dbManager = null;

    private mysqli $connection;

    private function __construct()
    {
        $this->connection = new mysqli(self::db_host, self::db_user, self::db_password, self::db_name);
        if ($this->connection->connect_error)
            die("Si è verificato un errore: ". $this->connection->connect_error);

        $this->initDb();
    }

    public static function getInstance(): DbManager {
        if (self::$dbManager == null)
            self::$dbManager = new DbManager();

        return self::$dbManager;
    }

    private function initDb() {
        $query = "CREATE TABLE IF NOT EXISTS utenti(username VARCHAR(30) PRIMARY KEY, password VARCHAR(100) NOT NULL);";
        if (!$this->connection->query($query))
            die("Non è stato possibile creare il database e la tabella iniziale");
    }

    public function getUtente(string $username): ?Utente {
        $query = "SELECT password FROM utenti WHERE username=?";
        $prepared = $this->connection->prepare($query);
        $prepared->bind_param("s", $username);
        $prepared->execute();
        $result = $prepared->get_result();
        if ($result == false || $result->fetch_assoc() == null)
            return null;
        else
            return new Utente($username, $result->fetch_assoc()['password']);
    }

    public function registraUtente(string $username, string $password): bool {
        $query = "INSERT INTO utenti (username, password) VALUES (?, ?)";
        $prepared = $this->connection->prepare($query);
        $prepared->bind_param("s", $username, $password);
        $prepared->execute();
        $result = $prepared->get_result();

        //return $result != false;
        if ($result == false)
            return false;
        else
            return true;
    }
}