<?php
namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = 'Ever Jamioy';
        $this->email = 'ever@ever.com';
    }
}