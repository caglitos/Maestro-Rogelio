<?php
    class Persona {
        private string $nombre, $apellido;
        
        // constructur para establecer nombre y apellido
//        public function __construct(string $nombre, string $apellido) {
//            $this->nombre = $nombre;
//            $this->apellido = $apellido;
//
//        }
        public function __construct() {
        }

        // establecer nombre
        public function setNombre(string $nombre) {
            $this->nombre = $nombre;

        }

        // obtener nombre
        public function getNombre() {
            return $this->nombre;

        }

        // establecer apellido
        public function setApellido(string $apellido){
            $this->apellido = $apellido;
            
        }

        // obtener apellido
        public function getApellido() {
            return $this->apellido;

        }

        public function getNombreCompleto() {
            $nombreCompleto = "$this->nombre $this->apellido";
            return $nombreCompleto;
            // return "$this->nombre $this->apellido"; // es mala practica
        }

    }

?>