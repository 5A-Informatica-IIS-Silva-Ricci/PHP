<?php
$impostazioni = new Impostazioni();

if (isset($_SESSION['impostazioni']))
    $impostazioni = unserialize($_SESSION['impostazioni']);
?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editor</title>
</head>
<body>
<nav class="container-fluid p-3 bg-dark text-light d-flex justify-content-between align-items-center fs-1">
    <a class="btn btn-primary" href="editor.php">Modifica</a>
    <div>Preview WebApp</div>
    <div>&nbsp;</div>
</nav>

<div class="d-flex flex-column m-4">
    <?php for($i = 0; $i<$impostazioni->getNumeroVoci(); $i++) {
        echo "<div>Voce ".($i+1)."</div>";
    } ?>
</div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
