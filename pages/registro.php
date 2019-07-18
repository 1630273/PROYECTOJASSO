<?php
    include("../conexion/conexion.php");

    if(isset($_POST['registrar'])){
        if(strlen($_POST['matricula'])>=1 && strlen($_POST['nombre'])>=1 && strlen($_POST['AP'])>=1 && strlen($_POST['nombre'])>=1){
            $matricula= trim( $_POST['matricula']);
            $nombre= trim( $_POST['nombre']);
            $AP= trim( $_POST['AP']);
            $AM= trim( $_POST['AM']);
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
    <title>REGISTRO</title>
</head>
<body>
    <form method="post">
        <h1>REGISTRO</h1>
        <input type="text" name="matricula" placeholder="Matricula">
        <input type="text" name="nombre" placeholder="Nombres">
        <input type="text" name="AP" placeholder="Apellido Patero">
        <input type="text" name="AM" placeholder="Apellido Materno">
        <input type="submit" name="registrar" >
    
    </form>


    
    
</body>
</html>