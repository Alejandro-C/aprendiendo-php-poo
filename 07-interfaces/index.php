<?php
interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;

    public function getModelo() { return $this->modelo; }
    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function encender() { return 'encender'; }
    public function apagar() { return 'apagar'; }
    public function reiniciar() { return 'reiniciar'; }
    public function desfragmentar() { return 'desfragmentar'; }
    public function detectarUSB() { return 'detectar USB'; }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2020');

echo $maquintos->getModelo();