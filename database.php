<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "config/includes/header.php"; ?>
<div class="form-container-table"> 
    <h1>Base de datos</h1> 
    <form action="" method="post">
        <label for="search">Buscar:</label>
        <input type="text" name="search">
        <input type="submit" value="Buscar">
        <input type="submit" name="restablecer" value="Restablecer">
    </form>
</div>
    <table class="table-container">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CEDULA</td>

        </tr>
   
    <?php 
    
    $inc= include "config/dbConnect.php";


    if (!isset($_POST["search"])) {

        $search= $_POST["search"]= "";
    }
    else{
        $search= $_POST["search"];
       
    }
    
    $global_search= "SELECT * FROM usuarios WHERE nombre LIKE '%".$search."%' OR apellido LIKE '%".$search."%' OR cedula LIKE '%".$search."%'";

    $sql_global_search= mysqli_query($db,$global_search);

    
        

          if ($inc) {
            if (empty($global_search)) {
            
            
            $check= "SELECT * FROM usuarios";
            $result= mysqli_query($db, $check);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                     
                    ?>

                
                
                <tr>
                    <td><?php echo $row ["id"]; ?></td>
                    <td><?php echo $row ["nombre"]; ?> </td>  
                    <td><?php echo $row ["apellido"] ?></td> 
                    <td><?php echo $row ["cedula"]; ?></td>   
                </tr>
                <?php
                    
                }
              }
          }
          elseif(!empty($global_search) or isset($_POST['restablecer']) ) {
            while ($row=mysqli_fetch_array($sql_global_search)) {
                ?>
                <tr>
                    <td><?php echo $row ["id"]; ?></td>
                    <td><?php echo $row ["nombre"]; ?> </td>  
                    <td><?php echo $row ["apellido"] ?></td> 
                    <td><?php echo $row ["cedula"]; ?></td>   
                </tr>
    <?php
            }
          }
        }
    ?>
     </table>

     <?php
   
    
    
    
     ?>
</body>
</html>