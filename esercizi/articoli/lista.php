<?php
include "Articolo.php";
include "Db_Manager.php";

$manager = new Db_Manager();

$articolo = new Articolo($manager);


if (isset($_GET['reset']))
    $articolo->restart();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Aggiungi articolo</title>
</head>
<body class="d-flex justify-content-center align-items-center flex-column">
    <nav class="container-fluid d-flex justify-content-between align-items-center border-bottom">
        <h1 class="m-4">Lista articoli</h1>
        <div>
            <a class="btn btn-primary" href='<?= Articolo::URL_AGGIUNGI; ?>'>Aggiungi articoli</a>
            <a class="btn btn-danger" href='<?= Articolo::URL_RESET; ?>'>Svuota lista</a>
        </div>
    </nav>

    <div class="d-flex flex-wrap m-5 container-fluid">
        <?php
        $result = $articolo->lista();
        while ($row = $result->fetch_assoc()) {
            echo "Titolo: $row[titolo], Testo: $row[testo] <br/>";
        }
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>