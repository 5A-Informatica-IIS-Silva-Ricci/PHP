<?php

use mas\logica\handlers\ArticoliHandler;
use mas\template\TemplateUtil;

include "../template/header.php";
TemplateUtil::renderPageTitle("Gestione articoli")
?>
<div>
    <?= ArticoliHandler::renderAsList() ?>
</div>
<?php
include "../template/footer.php";
