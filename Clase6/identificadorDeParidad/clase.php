<?php 
    class IdentificadorDeParidad {
        private int $numero;
        
        public function __construct() {
        }

        // establecer numero
        public function setNumero(int $numero) {
            $this->numero = $numero;

        }

        // obtener numero
        public function getNumero() {
            return $this->numero;

        }

        // validar si el numero es par o impar
        public function validateNumero(){
            return "El numero : " . $this->numero . " es: ". $this->numero % 2 == 0 ? "par" : "impar" . "<br>";
        }

    }

?>