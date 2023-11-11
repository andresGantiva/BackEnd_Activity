<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de nacimiento</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
 
<?php include "config/includes/header.php"; ?>
<div class="form-container">
<h1>Fecha de nacimiento</h1>

<form action="" method="get">
    <label for="birthdate"> Ingresa tu fecha de nacimiento</label></br>
    <input type="date" name="birthdate" id="birthdate"></br></br>
    <input type="submit" value="Enviar">
    
</form>
</div>
<div class="result-operations">
<?php
//Funcion para ocultar Warnings de variables
//cuando se inicia por primera vez

error_reporting(E_ALL & ~E_WARNING & ~E_DEPRECATED);

//Definir variables

$birthdate= $_GET["birthdate"];


$actual_date= 

//Proceso

$your_age = date_diff(date_create($birthdate), date_create($currentDate))->y;


if ($your_age>=18) {
    echo "<h2>Resultado</h2>";
    echo "</br>";
    echo "Tienes ".$your_age." años, eres mayor de edad";
}
else {
    echo "<h2>Resultado</h2>";
    echo "</br>";
    echo "Tienes ".$your_age." años, eres menor de edad";
}

?>
</div>

</body>
</html>