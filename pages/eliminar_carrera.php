<?php

include("../conexion/conexion.php");

if(isset($_GET['Id_carrera'])) {
  
    $id = $_GET['Id_carrera'];
    $query = "DELETE FROM carrera WHERE Id_carrera = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("error al eliminar.");
    }else {
       echo"elimidado";
    }

    header("Location:agregarCarrera.php"); 
}


  
?>