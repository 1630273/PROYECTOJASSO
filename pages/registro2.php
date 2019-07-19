<?php
    include("../conexion/conexion.php");

    if(isset($_POST['registrar'])){
        if(strlen($_POST['matricula'])>=1 && strlen($_POST['nombre'])>=1 && strlen($_POST['AP'])>=1 && strlen($_POST['nombre'])>=1){
            $matricula=  $_POST['matricula'];
            $nombre= $_POST['nombre'];
            $AP= $_POST['AP'];
            $AM= $_POST['AM'];
            $consulta = "INSERT INTO MAESTROS(matricula,nombre,apellidoP,apellidoM) VALUES('$matricula','$nombre','$AP','$AM')";

            $resultado = mysqli_query($conexion,$consulta);
            
            if($resultado){
                ?>
                <h3>Registro exitoso</h3>
                <?php
            } else {
                ?>
                <h3>HA ocurrido un error</h3>
                <?php
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
      <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
      <!-- FONT AWESOEM -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>REGISTRO</title>
</head>
<body>
<div>
    <form method="post">
        <h1>REGISTRO</h1>
        
        <input type="text" name="matricula" placeholder="Matricula" class="form-control" autofocus>
        <input type="text" name="nombre" placeholder="Nombres" class="form-control" >
        <input type="text" name="AP" placeholder="Apellido Patero" class="form-control" >
        <input type="text" name="AM" placeholder="Apellido Materno" class="form-control" >
        <input type="submit"  class="btn btn-success " name="registrar" >
    
    </form>
</div>
<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido P</th>
                <th>Apellido M</th>
                <th>Aciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $obtener = "SELECT id_maestro,matricula,nombre,apellidoP,apellidoM FROM MAESTROS";
            $resultadosObtenidos = mysqli_query($conexion,$obtener);
            
            while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                <tr>
                    <td> <?php echo $row['matricula'] ?> </td>
                    <td> <?php echo $row['nombre'] ?> </td>
                    <td> <?php echo $row['apellidoP'] ?> </td>
                    <td> <?php echo $row['apellidoM'] ?> </td>
                    <td> 
                        <a href="modificar.php?id_maestro=<?php echo $row['id_maestro']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                        </a>  
                        <a href="eliminar.php?id_maestro=<?php echo $row['id_maestro']?>"class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                        </a> 
                    </td>
                </tr>
                <?php } ?>
            
        </tbody>
    </table> 

    
    </div>
</body>
</html>