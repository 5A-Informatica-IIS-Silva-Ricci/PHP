<?php

namespace mas;
include "autoloader.php";

class ArticoliHandler
{
    public static function nuovoArticolo(array $postData) {

    }

    public static function renderAsList() {
        $manager = new ArticoliManager();
        $articoli = $manager->getAll();
        ?>
            <div>
                <?php
                foreach ($articoli as $articolo) {
                    echo self::parseToArticolo($articolo)->getNome();
                }
                ?>
            </div>
        <?php
    }

    public static function parseToArticolo(array $data): Articolo {
        return new Articolo($data);
    }
}