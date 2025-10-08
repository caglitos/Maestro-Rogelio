<?php

$numero1 = $_GET['formNum1'];
$numero2 = $_GET['formNum2'];
$numero3 = $_GET['formNum3'];

function mostrarTabla($numero1, $numero2, $numero3) {
    echo "<h2>Tabla de multiplicar del {$numero1}</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>";
    for ($i = $numero2; $i <= $numero3; $i++) {
        echo "<tr><td>{$numero1} x {$i}</td><td>" . ($numero1 * $i) . "</td></tr>";
    }
    echo "</table>";
}

mostrarTabla($numero1, $numero2, $numero3);