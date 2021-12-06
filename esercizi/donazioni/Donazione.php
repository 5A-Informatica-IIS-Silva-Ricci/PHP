<?php
include "autoloader.php";

class Donazione
{
    private int $id;
    private int $importo;
    private string $ente;
    private int $anno;
    private string $nota;

    public function __construct(array $dbData)
    {
        $this->id=$dbData['id'];
        $this->importo=$dbData['importo'];
        $this->ente=$dbData['ente'];
        $this->anno=$dbData['anno'];
        $this->nota=$dbData['nota'];
    }

    public function toString(): string {
        return "(ID: $this->id) Ente: $this->ente | Importo: $this->importo | Anno: $this->anno";
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getImporto(): int
    {
        return $this->importo;
    }

    /**
     * @param int $importo
     */
    public function setImporto(int $importo): void
    {
        $this->importo = $importo;
    }

    /**
     * @return string
     */
    public function getEnte(): string
    {
        return $this->ente;
    }

    /**
     * @param string $ente
     */
    public function setEnte(string $ente): void
    {
        $this->ente = $ente;
    }

    /**
     * @return int
     */
    public function getAnno(): int
    {
        return $this->anno;
    }

    /**
     * @param int $anno
     */
    public function setAnno(int $anno): void
    {
        $this->anno = $anno;
    }

    /**
     * @return string
     */
    public function getNota(): string
    {
        return $this->nota;
    }

    /**
     * @param string $nota
     */
    public function setNota(string $nota): void
    {
        $this->nota = $nota;
    }
}