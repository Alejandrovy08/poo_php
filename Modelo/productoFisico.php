<?php
    include_once 'producto.php';
    class productoFisico extends producto{
        private $precio;

        public function __construct($nombre, $precio, $peso){
            parent::__construct($nombre,$precio);
            $this->peso = $peso;
        }
        public function calculaPrecioFinal(){
            return $this->precio * ($this->peso*0.1);
        }
    }