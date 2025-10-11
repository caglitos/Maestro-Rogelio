<?php

$inicio = $_GET['inicio'];
$fin = $_GET['fin'];
$base = $_GET['base'];

$arreglo = array();

for ($i = $inicio; $i < $fin; $i++) { 
    $arreglo[$i] = $base * $arreglo[$i];
}

echo "<h2>Tabla de multiplicar del {$numero1}</h2>";
echo "<table border='1'>";
echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>";

for ($i = $inicio; $i < $fin; $i++) { 
    echo "<tr><td>{$base} x {$i}</td><td>" . $arreglo[$i] . "</td></tr>";
}
echo "</table>";