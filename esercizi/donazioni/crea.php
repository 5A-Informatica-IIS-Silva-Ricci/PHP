<?php
include "autoloader.php";

include "header.php";
TemplateUtil::renderPageTitle("Crea Donazione");
?>
<form method="post" action="index.php">
    <label for="importo">Importo</label>
    <input type="number" min="0" id="importo" name="importo" value="0" required>

    <label for="ente">Ente</label>
    <input type="text" id="ente" name="ente" value="caritas" required>

    <label for="anno">Anno</label>
    <input type="number" id="anno" name="anno" value="<?=date("Y")?>" max="2100" required>


    <label for="nota">Nota (opzionale)</label>
    <textarea id="nota" name="nota" maxlength="200" placeholder="Inserisci una nota"></textarea>

    <input type="submit" value="Crea donazione">
</form>
<?php
include "footer.php";