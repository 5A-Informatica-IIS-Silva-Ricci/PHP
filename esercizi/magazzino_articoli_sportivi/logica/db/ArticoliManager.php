<?php

namespace mas\logica\db;

use mas\config\DbConfig;

class ArticoliManager extends EntitaGenericaManager {
    public function __construct()
    {
        parent::__construct(DbConfig::TABELLA_ARTICOLI);
    }
}