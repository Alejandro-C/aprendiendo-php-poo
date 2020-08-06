<?php

trait Utilidades {
    public function mostrarNombre() { echo '<h3>El nombre es ' .$this->nombre .'</h3>'; }
}

class Coche {
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego {
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = 'Ferrari Testarosa';

$persona = new Persona();
$persona->nombre = 'Roberto Bolaños';

$videoJuego = new VideoJuego();
$videoJuego->nombre = 'Call Of Duty';

echo $coche->mostrarNombre();
echo $persona->mostrarNombre();
echo $videoJuego->mostrarNombre();