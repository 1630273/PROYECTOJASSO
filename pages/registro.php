<?php
    include("../conexion/conexion.php");

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
    <form action="POST">
        <h1>REGISTRO</h1>
       
        <input type="text" name="nombre" placeholder="Nombres">
        <input type="text" name="AP" placeholder="Apellido Patero">
        <input type="text" name="AM" placeholder="Apellido Materno">
        <input type="submit" name="registrar" >
    
    </form>
    
</body>
</html>