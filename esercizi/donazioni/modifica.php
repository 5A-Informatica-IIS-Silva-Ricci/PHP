<?php
include "autoloader.php";

include "header.php";
TemplateUtil::renderPageTitle("Modifica");

$id = $_GET["id"];
$manager = new ManagerX();
$donazione = $manager::parseToDonazione($manager->getViaId($id));
?>
<form action="index.php?id=<?=$donazione->getId()?>" method="post">
    <label for="importo">Importo</label>
    <input type="number" min="0" id="importo" name="importo" value="<?=$donazione->getImporto()?>" required>

    <label for="ente">Ente</label>
    <input type="text" id="ente" name="ente" value="<?=$donazione->getEnte()?>" required>

    <label for="anno">Anno</label>
    <input type="number" id="anno" name="anno" value="<?=$donazione->getAnno()?>" max="2100" required>


    <label for="nota">Nota (opzionale)</label>
    <textarea id="nota" name="nota" maxlength="200" placeholder="Inserisci una nota"><?=$donazione->getNota()?></textarea>

    <input type="submit" value="Modifica donazione">
</form>
<?php
include "footer.php"
?>
