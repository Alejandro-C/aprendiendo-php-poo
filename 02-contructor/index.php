<?php
require_once 'coche.php';

$coche = new Coche('Amarillo', 'Renault', 'Clio', 150, 200, 5);
$coche2 = new Coche('Azul', 'Seat', 'Panda', 250, 150, 3);
echo 'Coche 1';
var_dump($coche);
echo 'Coche 2';
var_dump($coche2);

echo '<hr>Cambios del Coche 1';

$coche -> color = 'Rosa'; //modificando una propiedad public
$coche -> setMarca('Audi'); //modificando una propiedad protected
$coche -> setModelo('CLIO'); //modificando una propiedad pirvate

var_dump($coche);

echo '<hr>Imprimindo la informacion del Coche 2';
echo $coche -> mostrarInformacion($coche2);