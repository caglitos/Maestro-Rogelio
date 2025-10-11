<?php

$inicio = isset($_GET['inicio']) ? intval($_GET['inicio']) : 0;
$fin = isset($_GET['fin']) ? intval($_GET['fin']) : 0;
$base = isset($_GET['base']) ? intval($_GET['base']) : 1;

if ($inicio > $fin) {
    $tmp = $inicio;
    $inicio = $fin;
    $fin = $tmp;
}

$arreglo = [];

for ($i = $inicio; $i < $fin; $i++) {
    $arreglo[$i] = $base * $i;
}

echo "<h2>Tabla de multiplicar del {$base}</h2>";
echo "<table border='1'>";
echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>";

for ($i = $inicio; $i < $fin; $i++) {
    echo "<tr><td>{$base} x {$i}</td><td>" . $arreglo[$i] . "</td></tr>";
}
echo "</table>";
