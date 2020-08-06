<?php
class Usuario {
    const URL_COMPLETA = 'http//localhost';
    public $email;
    public $password;

    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }

    public function setEmail($email) { $this->email = $email; }
    public function setPassword($password) { $this->password = $password; }
}

$usuario = new Usuario();
var_dump($usuario);
echo $usuario::URL_COMPLETA .'<br>'; //mostrando el valor de la constante
echo Usuario::URL_COMPLETA; //mostrando el valor de la contante sin usar el objeto $usuario