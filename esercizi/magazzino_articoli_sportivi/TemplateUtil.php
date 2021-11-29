<?php

namespace mas;
include "autoloader.php";

class TemplateUtil
{
    public static function renderPageTitle(string $title) {
        ?>
        <div>
            <h1><?=$title?></h1>
        </div>
        <?php
    }
}