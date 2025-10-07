<?php

$numero1 = isset($_POST['formNum1']) ? (float)$_POST['formNum1'] : 0;
$numero2 = isset($_POST['formNum2']) ? (float)$_POST['formNum2'] : 0;
$operando = isset($_POST['slOperacion']) ? $_POST['slOperacion'] : '';

$operaciones = [
    '+' => function($a, $b) { return $a + $b; },
    '-' => function($a, $b) { return $a - $b; },
    '*' => function($a, $b) { return $a * $b; },
    '/' => function($a, $b) { return $b != 0 ? $a / $b : 'Error: División por cero'; },
];

function interpretarOperacion($op, $a, $b, $ops) {
    if (isset($ops[$op])) {
        return $ops[$op]($a, $b);
    }
    return 'Operación no válida';
}

$resultado = interpretarOperacion($operando, $numero1, $numero2, $operaciones);
echo "El resultado de $numero1 $operando $numero2 es: " . $resultado . "<br>";
echo "<a href='index.html'>Volver al formulario</a>";

