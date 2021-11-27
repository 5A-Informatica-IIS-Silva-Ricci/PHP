<?php

$db = "primo";
$db_host = "localhost";
$db_user = "root";
$db_password = "";

$db_connection = new mysqli($db_host, $db_user, $db_password, $db);
if ($db_connection->connect_error) {
    die("Si è verificato un errore: ". $db_connection->connect_error);
}

// interrogazione db
$result = $db_connection->query("SELECT * FROM tabella1");
$rows = $result->num_rows;
echo "Sono presenti $rows records <br/>";

if ($rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: $row[id], Nome: $row[nome] <br/>";
    }
}