<?php
namespace mas;
include "autoloader.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Magazzino articoli sportivi</title>
</head>
<body>
    <nav>
        <div>Magazzino articoli sportivi</div>
        <div>
            <a href="<?= ViewsConfig::INDEX ?>">Home</a>
            <a href="<?= ViewsConfig::NUOVO ?>">Nuovo articolo</a>
            <a href="<?= ViewsConfig::RIFORNIMENTO ?>">Rifornimento</a>
        </div>
    </nav>
    <div>
