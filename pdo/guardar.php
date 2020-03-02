<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

//Sentencias preparadas, evitan sql inyection
//$ins = $con->prepare("INSERT INTO personas (id, nombre, apellido) VALUES(DEFAULT, :nombre, :ape)");
$ins = $con->prepare("INSERT INTO personas VALUES (DEFAULT, :nombre, :apellido)");
$ins->bindParam(':nombre', $nombre);
$ins->bindParam(':apellido', $apellido);
if($ins->execute()) {
    echo 'Guardo';
}else {
    echo 'NO guardo';
}


?>