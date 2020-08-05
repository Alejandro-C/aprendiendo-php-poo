<?php
class Coche {
    // atributos o propiedades(variables)

    // PUBLIC: podemos acceder desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    public $velocidad;
    public $caballaje;
    public $plazas;

    // PROTECTED: podemos acceder desde la clase que los define y desde clases que hereden esta clase
    protected $marca;
    
    // PRIVATE: unicamente se puede acceder desde la clase
    private $modelo;


    // creando el contructor
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this -> color = $color;
        $this -> marca = $marca;
        $this -> modelo = $modelo;
        $this -> velocidad = $velocidad;
        $this -> caballaje = $caballaje;
        $this -> plazas = $plazas;
    }

    // metodos(funciones)
    public function getColor() { return $this -> color; }
    public function setColor($color) { $this -> color = $color; }

    public function getModelo() { return $this -> modelo; }
    public function setModelo($modelo) { $this -> modelo = $modelo; }

    public function setMarca($marca) { $this -> marca = $marca; }

    public function acelerar() { $this -> velocidad++; }
    public function frenar() { $this -> velocidad--; }
    public function getVelocidad() { return $this -> velocidad; }

    public function mostrarInformacion(Coche $miObjeto) {
        if (is_object($miObjeto)) {
            $informacion = '<h3>Informacion del coche</h3>';
            $informacion .= 'Color: ' .$miObjeto -> color .'<br>';
            $informacion .= 'Modelo: ' .$miObjeto -> modelo .'<br>';
            $informacion .= 'Velocidad: ' .$miObjeto -> velocidad .'<br>';
        } else {
            $informacion = 'Tu dato es $miObjeto';
        }

        return $informacion;
    }
}