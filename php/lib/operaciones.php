<?php
    require('classOperaciones.php'); 

    class Operaciones extends values{
        private $numeroUno;
        private $numeroDos;
        public $suma;
        public $resta;
        public $multiplicacion;
        public $division;

        public function sumar(){
            $this->numeroUno = $this->getNumUno();
            $this->numeroDos = $this->getNumDos();
            $this->suma = $this->numeroUno + $this->numeroDos;

            return $this->suma;
        }

        public function restar(){
            $this->numeroUno = $this->getNumUno();
            $this->numeroDos = $this->getNumDos();
            $this->resta = $this->numeroUno - $this->numeroDos;
            return $this->resta;
        }

        public function multiplicar(){
            $this->numeroUno = $this->getNumUno();
            $this->numeroDos = $this->getNumDos();
            $this->multiplicacion = $this->numeroUno * $this->numeroDos;
            return $this->multiplicacion;
        }

        public function dividir(){
            $this->numeroUno = $this->getNumUno();
            $this->numeroDos = $this->getNumDos();
            $this->division = $this->numeroUno / $this->numeroDos;
            return $this->division;
        }


    }


?>