<?php
class Persona {
    public $nombre;
    public $edad;
    public $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);

            if (isset($this->$nombre_metodo)) return $this->$nombre_metodo;
            return 'el metodo no existe';
        } else {
            return 'el metodo no existe';
        }
    }
}

$persona = new Persona('Ever', '19', 'ever@ever.com');

echo $persona->getPila();