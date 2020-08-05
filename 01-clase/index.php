<?php
// definiendo una clase coche
class Coche {
    // atributos o propiedades(variables)
    public $color = 'Rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // metodos(funciones)
    public function getColor() { return $this -> color; }
    public function setColor($color) { $this -> color = $color; }

    public function getModelo() { return $this -> modelo; }
    public function setModelo($modelo) { $this -> modelo = $modelo; }

    public function acelerar() { $this -> velocidad++; }
    public function frenar() { $this -> velocidad--; }
    public function getVelocidad() { return $this -> velocidad; }
}

// crear un objeto / instanciar la clase
$coche = new Coche();
$coche2 = new Coche();

// usar los metodos
// coche 1
$coche -> setColor('Amarillo');
echo 'El color del coche1 es: ' .$coche -> getColor() .'<br>';

echo 'La velocidad del coche1 es: ' .$coche -> getVelocidad() .'Km/H <br>';
$coche -> acelerar();
$coche -> acelerar();
$coche -> acelerar();
$coche -> frenar();
echo 'La velocidad del coche1 ahora es: ' .$coche -> getVelocidad() .'Km/H <br>';

echo 'El modelo del coche1 es: ' .$coche -> getModelo() .'<hr>';

// coche2
$coche2 -> setColor('Verde');
$coche2 -> setModelo('Gallardo');
echo 'El color del coche2 es: ' .$coche2 -> getColor() .'<br>';
echo 'La velocidad del coche2 es: ' .$coche2 -> getVelocidad() .'Km/H <br>';
echo 'El modelo del coche2 es: ' .$coche2 -> getModelo();