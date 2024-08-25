<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="POST">
    <h1>Registro de Productos</h1>
    <label>ID</label>
    <input type="text" name="id"> <br>
    <label>Nombre del producto</label>
    <input type="text" name="nombre"><br>
    <label>Precio</label>
    <input type="text" name="precio"><br>
    <input type="submit" name="insertar" value="INSERTAR"> 
    <input type="submit" name="consultar" value="CONSULTAR">
    <input type="submit" name="actualizar" value="ACTUALIZAR">
    <input type="submit" name="eliminar" value="ELIMINAR"> <br>
    <?php
    $conexion=new mysqli('LOCALHOST', 'root', '', 'tienda');

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];

    if (isset($_POST['insertar'])) {
        $insertar="INSERT INTO producto (nombre, precio) VALUES ('$nombre', '$precio')";
        $sql=mysqli_query($conexion, $insertar);
    }
    if (isset($_POST['consultar'])) {
        $consultar="SELECT * FROM producto";
        $sql=mysqli_query($conexion, $consultar);
        while ($ver=mysqli_fetch_array($sql)) {

        echo $ver['id'];
        echo " ";
        echo $ver['nombre'];
        echo " L.";
        echo $ver['precio'];
        echo "<br><hr>";
        }
    }
    if (isset($_POST['actualizar'])) {
        $actualizar="UPDATE producto SET nombre='$nombre', precio='$precio' WHERE id='$id' ";
        $sql=mysqli_query($conexion, $actualizar);
    }
    if (isset($_POST['eliminar'])) {
        $eliminar="DELETE FROM producto WHERE id='$id'";
        $sql=mysqli_query($conexion, $eliminar);
    }

    ?>
</body>
</html>