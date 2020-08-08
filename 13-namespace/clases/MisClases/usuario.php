<?php
namespace MisClases;

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = 'Alejandro Carvajal';
        $this->email = 'alejandro@alejandro.com';
    }
}