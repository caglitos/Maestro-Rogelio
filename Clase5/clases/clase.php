<?php
    class Persona {
        private string $nombre, $apellido;
        
        // constructur para establecer nombre y apellido
        public function __construct($nombre, $apellido) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;

        }

        // establecer nombre
        public function setNombre($nombre) {
            $this->nombre = $nombre;

        }

        // obtener nombre
        public function getNombre() {
            return $this->nombre;

        }

        // establecer apellido
        public function setApellido($apellido){
            $this->apellido = $apellido;
            
        }

        // obtener apellido
        public function getApellido() {
            return $this->apellido;

        }

    }

?>