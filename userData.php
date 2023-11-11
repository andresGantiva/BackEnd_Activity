<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "config/includes/header.php"; ?>


<div class="form-container">
<h1>Datos basicos</h1>
<form action="resultpage.php" method="get">
    <label for="name"> Ingresa tu nombre</label></br>
    <input type="text" name="name" id="name" required placeholder="Nombre"></br></br>
    <label for="edad"> Ingresa tu apellido</label></br>
    <input type="text" name="last_name" id="last_name" required placeholder="Apellido"></br></br>
    <label for="edad"> Ingresa tu numero de ID</label></br>
    <input type="text" name="id" id="id" required placeholder="0123456789"></br></br>
    <input type="submit" value="Enviar">
</form>
</div>

</body>
</html>