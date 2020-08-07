<?php
function appAutoload($class) {
    require_once 'clases/' .$class .'.php';
}

spl_autoload_register('appAutoload');