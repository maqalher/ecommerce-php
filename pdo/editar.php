<?php
include 'conexion.php';
$id = $_GET['id'];

$sel = $con->prepare("SELECT * FROM personas WHERE id = ? ");
$sel->execute(array($id));
if($f = $sel->fetch()){}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nombre" placeholder="nombre" value="<?php echo $f['nombre']; ?>">
        <input type="text" name="apellido" placeholder="apellido" value="<?php echo $f['apellido'];?>"  >
        <input type="submit" value="Editar">
    </form>

</body>
</html>