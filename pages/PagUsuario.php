<?php
require '../conexion/conexion.php';
session_start();
$usuario = $_SESSION['usuario'];
echo "<h1>BIENVENIDO $usuario</h1>";

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="TablaHorario.php">Hola</a></button>
</body>
</html>