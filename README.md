<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="index.php" method="POST">
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
    <a href="index.php">
</body>
</html>
