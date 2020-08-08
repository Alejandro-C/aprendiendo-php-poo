<?php

use MisClases\Categoria;
use MisClases\Entrada;
use MisClases\Usuario;
use PanelAdministrador\Usuario as UsuarioAmin;

require_once 'autoload.php';

// espacios de nombre y paquetes

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}

$principal = new Principal();
$usuarioAdmin = new UsuarioAmin();

var_dump($principal->usuario);
var_dump($usuarioAdmin);