<?php
session_start();

class Articolo
{
    private $id;
    private $titolo;
    private $testo;
    private $img;
    private $manager;

    public const URL_LISTA = "lista.php";
    public const URL_AGGIUNGI = "form.php";
    public const URL_RESET = "lista.php?reset=true";

    public function __construct($connection)
    {
        $this->manager = $connection;
    }

    public function getId() {
        return $this->id;
    }

    public function create($articolo) {
        $this->titolo = $articolo['titolo'];
        $this->testo = $articolo['testo'];
        $this->id = uniqid();

        $dir = "uploads/";
        $nomeFile = $_FILES["upload"]["name"];
        $explode = (explode(".", $nomeFile));
        $ext = end($explode);

        $file = $dir . $this->id.".".$ext;
        move_uploaded_file($_FILES["upload"]["tmp_name"], $file);
        $this->img = $file;
    }

    public function stampa() {
        ?>
        <div class="w-25 h d-flex flex-column justify-content-between border m-2 rounded">
            <div class="d-flex flex-column align-items-center justify-content-center p-2">
                <h4 ><?= $this->titolo ?></h4>
                <p class="mt-2 text-center"><?= $this->testo ?></p>
            </div>
            <img src="<?=$this->img ?>">
        </div>
        <?php
    }

    public function lista(){
        return $this->manager->lista();
    }

    public function get($id) {
        return $this->manager->singolo($id);
    }

    public function add($value){
        $_SESSION['articoli'][$value->getId()] = serialize($value);
    }

    public function restart(){
        $_SESSION['articoli'] = [];
    }
}