<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$up = $con->prepare("UPDATE personas SET nombre = :nombre, apellido = :apellido WHERE id = :id");
$up->bindParam(':nombre', $nombre);
$up->bindParam(':apellido', $apellido);
$up->bindParam(':id', $id);
if($up->execute()) {
    echo 'Edito';
}else {
    echo 'NO edito';
}


?>