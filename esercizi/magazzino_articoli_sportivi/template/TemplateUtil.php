<?php

namespace mas\template;

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