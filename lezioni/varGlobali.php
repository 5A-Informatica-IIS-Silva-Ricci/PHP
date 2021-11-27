<?php

# Per prendere parametri dalle richieste get alla pagina
$_GET["nome_variabile"];

# Prendere dati dai form
$_POST["chiave"];

# Mai prendere valori da $_GET e $_POST ed assegnarli a variabili in production
# Perchè permette di injectare codice nella pagine ad utenti esterni