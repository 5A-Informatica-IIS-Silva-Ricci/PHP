<?php

namespace mas\logica\db;

use mysqli;

class EntitaGenericaManager
{
    private string $tabella;
    private mysqli $connection;

    protected function __construct(string $tabella)
    {
        $this->tabella = $tabella;
        $this->connection = DbManager::getInstance()->getConnection();
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

    public function new(array $data): bool {
        $query = "INSERT INTO ".$this->tabella." (nome, quantita, prezzo) VALUES ('".$data['nome']."', '".$data['quantita']."', '".$data['prezzo']."')";
        return $this->connection->query($query);
    }
}