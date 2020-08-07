<?php
// captura excepciones, en codigo susceptible a errores
try {
    if (isset($_GET['id'])) {
        echo "<h3>El parametro es: {$_GET['id']}</h3>";
    } else {
        throw new Exception('Faltan parametros por la url');
    }
} catch(Exception $e) {
    echo 'Ha habido un error: ' .$e->getMessage();
}