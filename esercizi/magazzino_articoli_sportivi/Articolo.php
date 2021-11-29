<?php

namespace mas;
include "autoloader.php";

class Articolo
{
    private int $id;
    private string $nome;
    private int $quantita;
    private int $prezzo;

    public function __construct(array $dbData)
    {
        $this->id = $dbData["id"];
        $this->nome = $dbData["nome"];
        $this->quantita = $dbData["quantita"];
        $this->prezzo = $dbData["prezzo"];
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getQuantita(): int
    {
        return $this->quantita;
    }

    public function getPrezzo(): int
    {
        return $this->prezzo;
    }


}