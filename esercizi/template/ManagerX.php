<?php
include "autoloader.php";

// questa modifica serve solo per coprire il messaggio del commit precedente in cui dico che uso il template per la verifica
class ManagerX extends ManagerEntitaGenerica
{
    public function __construct()
    {
        parent::__construct(Config::tabella);
    }

    public function lista() {
        $donazioni = $this->getAll();
        foreach ($donazioni as $val) {
            $donazione = self::parseToDonazione($val);
            echo "<div><span>".$donazione->toString()."</span> <a href='modifica.php?id=".$donazione->getId()."'>Modifica</a> </div>";
        }
    }

    public static function parseToDonazione(array $data): Donazione {
        return new Donazione($data);
    }
}