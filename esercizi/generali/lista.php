<?php
session_start();

$reset = false;
if ($reset) {
    session_destroy();
}

class Elemento {
    public $nome = "nome";
    public $quantita = 10;
    public $descrizione = "descrizione breve";

    public function __construct(string $nome, int $quantita, string $descrizione) {
        $this->nome = $nome;
        $this->quantita = $quantita;
        $this->descrizione = $descrizione;
    }
}


if(!empty($_POST)) {
    $_SESSION["elementi"][] = new Elemento($_POST["fnome"], (int) $_POST["fquantita"], $_POST["fdescrizione"]);
}

?>

<html>
    <body>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="fname">Nome</label>
        <input type="text" id="fnome" name="fnome" value="elemento">
        <label for="fname">Quantità</label>
        <input type="text" id="fquantita" name="fquantita" value="0">
        <label for="fname">Descrizione</label>
        <input type="text" id="fdescrizione" name="fdescrizione" value="elemento">
        <input type="submit" value="Aggiungi al magazzino">
    </form>

    <br><br>
    <title>Magazzino</title>
    <br>
    <ul>
        <?php
        if(!empty($_SESSION)) {
            foreach ($_SESSION["elementi"] as $key => $value) {
                print_r("<li>" . "Nome: " . $value->nome . ", quantità: " . $value->quantita . ", descrizione: " . $value->descrizione . "</li>");
            }
        }
            ?>
    </ul>
    </body>
</html>



