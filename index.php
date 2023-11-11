<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "config/includes/header.php"; ?>
    <div class="form-container">
        <h1>Calculadora</h1>
            <form action="" method="POST">
                <label for="n1"> Ingrese el primer numero</label></br>
                <input type="text" name="n1" id="n1" required placeholder="Numero 1"></br></br>
                <label for="n2"> Ingrese el segundo numero</label></br>
                <input type="text" name="n2" id="n2" required placeholder="Numero 2"></br></br>
                <label for="operation">Tipo de operacion</label></br>
                <select name="operation" id="operation" required>
                    <option disabled selected hidden>Selecciona... </option>
                    <option value="1">Sumar</option>
                    <option value="2">Restar</option>
                    <option value="3">Multiplicar</option>
                    <option value="4">Dividir</option>
                </select></br></br>
                <input type="submit" value="Enviar">
            </form>
    </div>

    <div class="result-operations">
   
    <?php

# Funcion para evitar warning cuando se inicia por primera vez

error_reporting(E_ALL & ~E_WARNING);

//Variables antes de inicializar


if (isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["operation"])) {

    $n1= $_POST["n1"];
    $n2= $_POST["n2"];
    $operation= $_POST["operation"];
}

?>

<?php
    switch ($operation) {
        case '1':
            $total= $n1+$n2;
            echo "<h2>Resultado</h2>";
            echo "</br>";
            echo "Suma:";
            echo "</br>";
            echo "$n1 + $n2 = $total";
            
            break;
        case '2':
            $total= $n1-$n2;
            echo "<h2>Resultado</h2>";
            echo "</br>";
            echo "Resta:";
            echo "</br>";
            echo "$n1 - $n2 = $total";
            
            break;
        
        case '3':
            $total= $n1*$n2;
            echo "<h2>Resultado</h2>";
            echo "</br>";
            echo "Multiplicacion:";
            echo "</br>";
            echo "$n1 * $n2 = $total";
            break;
        
        case '4':
            $total= $n1/$n2;
            echo "<h2>Resultado</h2>";
            echo "</br>";
            echo "Division:";
            echo "</br>";
            echo "$n1 / $n2 = $total";

            break;

        default:
            break;
    }
    ?>
    </div>
</body>
</html>