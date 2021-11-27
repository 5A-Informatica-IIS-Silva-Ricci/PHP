<?php
include "Articolo.php";

if(isset($_POST['submit'])) {
    $articolo = new Articolo();
    echo $articolo->create($_POST);
    $articolo->add($articolo);
}
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
        <h1 class="m-4">Aggiungi articolo</h1>
        <a class="btn btn-primary" href='<?= Articolo::URL_LISTA; ?>'>Visualizza articoli</a>
    </nav>

    <form action="form.php" method="post" enctype="multipart/form-data" class="mt-4 d-flex justify-content-center align-items flex-column">
        <label class="h6" for="titolo">Titolo</label>
        <input class="mb-3" type="text" id="titolo" name="titolo" placeholder='Titolo'>
        <label class="h6" for="testo">Testo</label>
        <textarea class="mb-3" id="testo" name="testo" placeholder='Testo'></textarea>
        <input class="mb-2" type="file" name="upload" id="upload" title="Aggiungi immagine">

        <input class="mt-3 btn btn-success container-fluid" type="submit" name=submit value="Aggiungi">
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>