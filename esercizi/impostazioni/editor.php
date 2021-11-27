<?php
include "Impostazioni.php";
session_start();

$impostazioni = new Impostazioni();

if (isset($_SESSION['impostazioni']))
    $impostazioni = unserialize($_SESSION['impostazioni']);


if(isset($_POST['submit'])) {
    $impostazioni = $impostazioni->create($_POST);
    $_SESSION['impostazioni'] = serialize($impostazioni);
}
?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editor</title>

    <style>
        .impostazione {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .impostazione div {
            margin-right: 0.75rem;
        }

        .impostazione * {
            font-size: 1.5rem;
        }
    </style>
</head>
<body class="">
    <nav class="container-fluid p-3 bg-dark text-light d-flex justify-content-center align-items-center fs-1">
        Impostazioni WebApp
    </nav>
    <form action="editor.php" method="post" class="m-4 flex-column">
        <div class="impostazione">
            <div>Nome tema</div>
            <input type="text" maxlength="100" name="nome" value="<?= $impostazioni->getNomeTema() ?>">
        </div>
        <div class="impostazione">
            <div>Numero voci per pagina</div>
            <input type="number" min="1" name="numero" value="<?= $impostazioni->getNumeroVoci() ?>">
        </div>
        <div class="impostazione">
            <input type="checkbox" class="btn-check" id="scuro" name="scuro" autocomplete="off" <?php echo ($impostazioni->getTemaScuro() ? 'checked' : '');?>>
            <label class="btn btn-outline-info" for="scuro">Tema scuro</label>
        </div>
        <div class="impostazione">
            <input type="checkbox" class="btn-check" id="hard" name="hard" autocomplete="off" <?php echo ($impostazioni->getHardDelete() ? 'checked' : '');?>>
            <label class="btn btn-outline-info" for="hard">Hard delete</label>
        </div>
        <div class="d-flex">
            <input type="submit" class="btn btn-success d-flex mt-4" name="submit" value="Salva">
            <a href="preview.php" class="btn btn-primary d-flex mt-4 mx-2">Preview</a>
        </div>
    </form>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
