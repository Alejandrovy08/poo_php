<?php
require_once 'cliente.php';

$c1 = new cliente("Pablo Mayo");
$c2 = new cliente("Rocío Gonzalez");

?>

<ol>
    <li><?= $c1->getNombre()?</li>
    <li><?= $c2->getNombre()?</li>
</ol>