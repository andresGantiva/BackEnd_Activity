<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include "config/includes/header.php"; ?>
<div class="form-container">
<h1>¿Eres mayor o menor de edad?</h1>

<form action="" method="get">
    <label for="age"> Ingresa tu edad</label></br>
    <input type="text" name="age" id="age" required placeholder="20"></br></br>
    <input type="submit" value="Enviar">
</form>
</div>
<div class="result-operations">
<h2>Resultado</h2>

<?php

# Funcion para evitar warning cuando se inicia por primera vez
error_reporting(E_ALL & ~E_WARNING);


//Variables antes de inicializar
    $age= $_GET["age"];


//proceso

if ($age >= 18) {

    echo "Tienes ".$age." años, eres mayor de edad.";
}
else{

    echo "Tienes ".$age." años, eres menor de edad.";
}

?>
</div>

</body>
</html>