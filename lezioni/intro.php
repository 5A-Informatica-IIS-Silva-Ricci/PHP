<pre> <!-- Formatta in modo leggibile tutto l'output -->

<?php
/*
 * Variabili e visualizzazione
 */
$a=5;
$b=3;
// Il tipo è gestito dal linguaggio in automatico, tipo js
$c=$a/$b;

echo $c;

echo "stampa con variabile $c";
echo 'stampa senza variabile $c (singoli apici)';

// Concatenazione stringhe
echo "ciao ".($c+1)." mondo";

// Visualizza tipo + valore variabile
var_dump($c);
// Più leggibile
print_r($c);

// Forzo la variabile come intero
var_dump((int)$c);


/*
 * Array
 */
$array=array(1, 2, 3, 4, 5, 6);
$array=[1, 2, 3, 4, 5 ,6];
var_dump($array);

// Array con indice custom
$arrayIndiceCustom=[1, "ciao"=>2, 3, 4, 5];
print_r($arrayIndiceCustom);

// Iterare un array
// Normale loop for for($i=0; $i<...)
// Oppure foreach
foreach ($array as $key=>$val) {
    echo "Chiave $key - valore: $val <br>";
}


/*
 * Funzioni
 */
function ciao() {
    echo "ciao <br>";
}
ciao();

function scambiaNonFunziona($v1, $v2) {
    // Se si modificano le variabili all'interno delle funzioni i cambiamenti non sono applicati al di fuori della funzione
    // Le variabili ora sono copie di quelle ricevute non referenze
    $tmp = $v1;
    $v1 = $v2;
    $v2 = $tmp;
}
function scambia(&$v1, &$v2) {
    // I cambiamenti alle variabili hanno effetto anche all'esterno della funzione
    // Con la & si ricevono referenze alle variabili
    $tmp = $v1;
    $v1 = $v2;
    $v2 = $tmp;
}

$v1 = 1;
$v2 = 2;

echo "v1 $v1 - v2 $v2 <br>";
scambiaNonFunziona($v1, $v2);
echo "v1 $v1 - v2 $v2 <br>";
scambia($v1, $v2);
echo "v1 $v1 - v2 $v2";
