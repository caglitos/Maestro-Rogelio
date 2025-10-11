<?php
// arreglos en php

$arreglo = array();

// ciclo que genera numeros del 1 al 7 y las guarda en el arreglo
for($i = 0; $i < 7; $i++) {
    $arreglo[$i] = $i + 1;
}

// imprimir del 7 al 1
for($j = 7; $j > 0; $j--) {
    echo $arreglo[$j - 1] . ", ";
}

echo "<br>";

$cadena = implode(", ", $arreglo);

echo $cadena ."<br>";

print_r($arreglo);
