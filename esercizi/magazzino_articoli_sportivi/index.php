<?php
namespace mas;
include "autoloader.php";

TemplateUtil::renderPageTitle("Gestione articoli")
?>
<div>
    <?= ArticoliHandler::renderAsList() ?>
</div>
<?php
include "../template/footer.php";
