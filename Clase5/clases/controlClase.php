<?php
    include 'clase.php';

    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    
    $objClase = new Persona();    
    $objClase->setNombre($nombre);
    $objClase->setApellido($apellido);

    echo "El nombre completo es: " . $objClase->getNombreCompleto();
    
?>