<?php

class Impostazioni
{
    private $nomeTema;
    private $numeroVoci;
    private $temaScuro;
    private $hardDelete;

    function __construct() {
        $this->nomeTema = "Default";
        $this->numeroVoci = 8;
        $this->temaScuro = false;
        $this->hardDelete = false;
    }

    public function create($postData): Impostazioni
    {
        $this->nomeTema = $postData['nome'];
        $this->numeroVoci = $postData['numero'];

        $this->temaScuro = isset($postData['scuro']);
        $this->hardDelete = isset($postData['hard']);

        return $this;
    }

    public function getNomeTema(): string
    {
        return $this->nomeTema;
    }

    public function getNumeroVoci(): int
    {
        return $this->numeroVoci;
    }

    public function getTemaScuro(): bool
    {
        return $this->temaScuro;
    }

    public function getHardDelete(): bool
    {
        return $this->hardDelete;
    }
}