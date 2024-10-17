<?php
include_once 'producto.php';
class productoDigital extends producto{
    public function calculaPrecioFinal(){
        return $this->precio;
    }
}