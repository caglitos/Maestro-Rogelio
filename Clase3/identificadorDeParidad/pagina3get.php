<?php

$inicio = $_GET['inicio'];
$fin = $_GET['fin'];
$pares = 0;
$impares = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    if ($i % 2 == 0) {
        echo "El n&uacute;mero $i es par <br>";
        $pares++;
    } else {
        echo "El n&uacute;mero $i es impar <br>";
        $impares++;
    }
}

echo "<br>Entre $inicio y $fin hay $pares números pares y $impares números impares.";