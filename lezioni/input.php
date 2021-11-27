<form method="post" action="input.php">
    <label for="fname">Nome</label>
    <input type="text" id="fname" name="fname" value="Giulio">
    <input type="submit" value="Invia">
</form>

// Questo funziona in qualsiasi php file siccome si prende il nome del file in automatico con la variabile globale server e chiave php_self
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <label for="fname">Nome</label>
    <input type="text" id="fname" name="fname" value="Giulio">
    <input type="submit" value="Invia">
</form>

<?php
if(!empty($_POST))
    echo $_POST["fname"];
