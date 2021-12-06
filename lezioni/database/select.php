<?php
// vecchio sistema - pericoloso per la sicurezza - utilizzo i valori get e post direttamente nelle query
$sql= 'SELECT * FROM tabella WHERE type= $_GET[type]';
$stmt = $this->db_connection->query($sql);


// nuovo sistema - rimedio alle sql injection
$sql= 'SELECT * FROM tabella WHERE type= ?';
$stmt = $this->db_connection->prepare($sql);

// s indica che vuole una stringa, i un intero
$stmt->bind_param("s", $_GET[type]);


$stmt->execute();
// dopo questa operazione devo sempre comunque fare il fetch_
return $stmt->get_result();