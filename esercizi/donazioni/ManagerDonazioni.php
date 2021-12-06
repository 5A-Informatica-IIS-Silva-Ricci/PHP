<?php
include "autoloader.php";

class ManagerDonazioni extends ManagerEntitaGenerica
{
    public function __construct()
    {
        parent::__construct(Config::tabellaDonazioni);
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