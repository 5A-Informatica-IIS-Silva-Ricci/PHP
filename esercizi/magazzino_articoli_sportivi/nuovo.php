<?php

namespace mas;
include "autoloader.php";

TemplateUtil::renderPageTitle("Nuovo articolo");

if (!empty($_POST))
    ArticoliHandler::nuovoArticolo($_POST);
?>
    <div>
        <form method="post" action="nuovo.php">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">

            <label for="quantita">Quantità</label>
            <input type="number" id="quantita" name="quantita">

            <label for="prezzo">Prezzo</label>
            <input type="number" id="prezzo" name="prezzo">

            <input type="submit">
        </form>
    </div>
<?php
include "../template/footer.php";
