<?php
    include 'clase.php';

    $numero = $_POST['numero'];
    
    $objClase = new IdentificadorDeParidad();    
    $objClase->setNumero($numero);

    echo $objClase->validateNumero();

?>