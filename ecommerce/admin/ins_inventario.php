<?php
include '../extend/headerphp.php';
include '../extend/alertas.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // encriptador - numero aleatorio
    $clave = sha1(rand(0000,9999).rand(00,99));
    $producto = htmlentities($_POST['producto']);   
    $cantidad = htmlentities($_POST['cantidad']);
    $precio = htmlentities($_POST['precio']);
    $categoria = htmlentities($_POST['categoria']);
    $descripcion = htmlentities($_POST['descripcion']);
}else{
    echo alerta('Utiliza el formulario', 'inventario.php');
}

?>