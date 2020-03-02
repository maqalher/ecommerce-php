<?php
include 'conexion.php';

$id = $_GET['id'];

$del = $con->prepare("DELETE FROM personas WHERE id = :id");
$del->bindParam(':id', $id);

if($del->execute()){
    echo 'Elimino';
}else{
    echo 'No elimino';
}


?>