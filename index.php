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