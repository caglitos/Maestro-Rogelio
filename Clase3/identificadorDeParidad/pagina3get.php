<?php

$inicio = $_GET['inicio'];
$fin = $_GET['fin'];

function contarParesImpares($inicio, $fin)
{
    $cantidadPares = 0;
    $cantidadImpares = 0;
    $pares = [];
    $impares = [];

    if ($fin < $inicio) {
        return 0;
    }

    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i % 2 == 0) {
            $cantidadPares++;
            $pares[] = $i;
        } else {
            $cantidadImpares++;
            $impares[] = $i;
        }
    }

    echo "Números pares: " . implode(", ", $pares) . "<br>";
    echo "Números impares: " . implode(", ", $impares) . "<br>";
    echo "<br>Entre $inicio y $fin hay $cantidadPares números pares y $cantidadImpares números impares.";
}

contarParesImpares($inicio, $fin);
