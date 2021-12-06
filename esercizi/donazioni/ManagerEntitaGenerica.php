<?php
include "autoloader.php";

class ManagerEntitaGenerica
{
    private string $tabella;
    private mysqli $connection;

    protected function __construct(string $tabella)
    {
        $this->tabella = $tabella;
        $this->connection = DBConnection::getInstance()->getConnection();
    }


    public function getAll(): array
    {
        $query = "SELECT * FROM " . $this->tabella;
        $result = $this->connection->query($query);

        $array = [];
        while ($row = $result->fetch_assoc())
            $array[] = $row;

        return $array;
    }

    public function getViaId($id): array
    {
        $query = "SELECT * FROM " . $this->tabella . " WHERE id='$id'";
        return $this->connection->query($query)->fetch_assoc();
    }

    public function salva(array $data): bool
    {
        $query = "INSERT INTO ".$this->tabella." (".implode(",", array_keys($data)).") VALUES ('".implode("','", array_values($data))."') ON DUPLICATE KEY UPDATE ".substr(join("", array_map(function ($value, $key) { return "$key='$value',";}, array_values($data), array_keys($data))), 0, -1);
        return $this->connection->query($query);
    }
}