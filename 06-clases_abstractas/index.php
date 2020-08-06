<?php
abstract class Ordenador {
    public $encendido;

    abstract public function encender(); //si o si las clases que la hereden deben definirla en su clase
    public function apagar() { $this->encendido = false; }
}

class PcAsus extends Ordenador{
    public $software;

    public function encender() { $this->encendido = true; } //definiendo el metodo encender

    public function arrancarSoftware() { $this->software = true; }
}

$pc = new PcAsus();
$pc->encender();
$pc->arrancarSoftware();
$pc->apagar();

var_dump($pc);