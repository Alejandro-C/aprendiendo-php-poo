<?php
class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        echo 'instancia del objeto creada <br>';
    }

    public function __destruct() {
        echo 'destruyendo el objeto';
    }
}

$usuario = new Usuario();

for ($i = 0; $i < 5; $i++) echo $i .'<br>';