<?php
// Herencia: la posibilidad de compartir atributos y metodos entre clases

class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre() { return $this -> nombre; }
    public function setNombre($nombre) { $this -> nombre = $nombre; }

    public function getApellidos() { return $this -> apellidos; }
    public function setApellidos($apellidos) { $this -> apellidos = $apellidos; }

    public function getAltura() { return $this -> altura; }
    public function setAltura($altura) { $this -> altura = $altura; }

    public function getEdad() { return $this -> edad; }
    public function setEdad($edad) { $this -> edad = $edad; }

    public function hablar() { echo 'Estoy hablando';}
    public function caminar() { echo 'Estoy caminando';}
}

class Informatico extends Persona{
    public $lenguajes;
    public $experienciaProgramandor;

    public function __construct() {
        $this -> lenguajes = 'HTML, CSS, PHP y JS';
        $this -> experienciaProgramandor = 10;
    }

    public function sabeLenguajes($lenguajes) { return $this -> lenguajes = $lenguajes; }
    public function programar() { echo 'soy programador'; }
    public function reparaPC() { echo 'reparar PC'; }
    public function hacerOfimatica() { echo 'estoy escribiendo en Word'; }
}

class TecnicoRedes extends Informatico {
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct() {
        parent::__construct(); // esto se usa para que pueda heredar el contructor del padre

        $this -> auditarRedes = 'Experto';
        $this -> experienciaRedes = 15;
    }

    public function auditoria() { return 'Estoy auditando una red'; }
}