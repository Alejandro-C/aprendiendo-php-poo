<?php
class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = 'Ever Carvajal';
        $this->email = 'ever@ever.com';
        echo 'instancia del objeto creada <br>';
    }

    // cando se imprima el objeto mostrara lo que este en esta funcion
    public function __toString() {  
        return 'Hola, ' .$this->nombre .', estas registrado con ' .$this->email .'<br>';
    }

    public function __destruct() {
        echo 'destruyendo el objeto';
    }
}

$usuario = new Usuario();

echo $usuario;

for ($i = 0; $i < 5; $i++) echo $i .'<br>';