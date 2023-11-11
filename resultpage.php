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

<div class="result-operations">
<h1>Resultados de tus datos</h1>

<?php

#Variables antes de inicializar
if (isset($_GET["name"]) && isset($_GET["last_name"]) && isset($_GET["id"])) {
    $name= $_GET["name"];
    $last_name= $_GET["last_name"];
    $id= $_GET["id"];
}

echo "</br>";
echo "Hola, $name $last_name.";
echo "</br>";
echo "Identificado con el numero: ".$id;

?>
</div>
</body>
</html>