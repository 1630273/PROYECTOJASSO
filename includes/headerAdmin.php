<?php
    include("../conexion/conexion.php");

    session_start();
    $usuario = $_SESSION['usuario'];

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PHP CRUD MYSQL</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-primary">
      <div class="container">
       
        <a class="navbar-brand" href="#">
                <?php
                $obtener = "select Nombre,Ap_paterno, Ap_materno FROM empleado WHERE correo ='".$usuario."' ";
           $resultadosObtenidos = mysqli_query($conexion,$obtener);
                   
            
        while($row = mysqli_fetch_array($resultadosObtenidos)){?>



          <?php echo strtoupper($row['Nombre'].' '.$row['Ap_paterno'].' '.$row['Ap_materno'])?> 
         
        <?php } ?>
      </a>
       <a class="navbar-brand" href="PrinAdmin.php">SISTEMA DE MAESTROS</a> 
       <div>
        
        <a class="navbar-brand" href="../conexion/logout.php">Logout</a>
      </div>
      </div>

    </nav>
