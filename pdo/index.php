<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellido" placeholder="apellido">
        <input type="submit" value="Guardar">
    </form>


    <table>
        <th>Nombre</th>
        <th>Apellido</th>
        <th></th>
        <th></th>
        <?php
            include 'conexion.php';
            $sel = $con->prepare("SELECT * FROM personas");
            $sel->execute();
            while( $f = $sel->fetch()) {
            ?>
                <tr>
                    <td><?php echo $f['nombre'];?></td>
                    <td><?php echo $f['apellido'];?></td>
                    <td><a href="editar.php?id=<?php echo $f['id']; ?>">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $f['id']; ?>">Eliminar</a></td>
                </tr>
            <?php 
            }
            $sel = null;
            $con = null;   
        ?>
    </table>
</body>
</html>