<?php
require_once 'cliente.php';

$c1 = new cliente("Pablo Mayo");
$c2 = new cliente("Rocío Gonzalez");

$productofisico = newproductoFisico("Telefono",1000,0.5);
echo "Nombre: $productoFisico->getNombre()";
?>

<ol>
    <li><?= $c1->getNombre()?</li>
    <li><?= $c2->getNombre()?</li>
</ol>