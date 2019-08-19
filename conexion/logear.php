<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];


$query = "SELECT COUNT(*)as contar FROM empleado WHERE Nombre ='$usuario' and contrasena ='$password'";
$consulta = mysqli_query($conexion,$query);

$rol = "SELECT  id_tipo_empleado FROM empleado WHERE Nombre ='$usuario' and contrasena ='$password'";
$consulta2 = mysqli_query($conexion,$rol);


$array = mysqli_fetch_array($consulta);
$array2 = mysqli_fetch_array($consulta2);

if($array['contar']>0){
    $_SESSION['usuario'] = $usuario;
    if($array2['id_tipo_empleado']==0){ 
        
        header("location: ../pages/PagAdmin.php");
    }
    if($array2['id_tipo_empleado']==1){
        $_SESSION['id_tipo_empleado'];
        header("location: ../pages/PagUsuario.php");
    }
    
}
else{
    echo "Datos incorrectos";
}


?>