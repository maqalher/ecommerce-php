<?php

//$con = new PDO('mysql:hots=localhost;dbname=personas','root', '');


/* Conectar a una base de datos de MySQL invocando al controlador */
$bd = 'mysql:host=127.0.0.1;dbname=personas';
$user = 'root';
$pass = '';

try {
    $con = new PDO($bd, $user, $pass);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>