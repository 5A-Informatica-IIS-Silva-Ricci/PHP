<?php

namespace mas;
include "autoloader.php";

class ArticoliManager extends EntitaGenericaManager {
    public function __construct()
    {
        parent::__construct(DbConfig::TABELLA_ARTICOLI);
    }
}