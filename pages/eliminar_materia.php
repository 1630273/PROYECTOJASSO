<?php

include("../conexion/conexion.php");

if(isset($_GET['Id_materia_carrera'])) {
  $carrera =$_GET['Id_carrera'];
    $id = $_GET['Id_materia_carrera'];
    $query = "DELETE FROM materia_carrera WHERE Id_materia_carrera = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("error al eliminar.");
    }else {
       echo"elimidado";
    }

    header("Location:agregarMateria_Carrera.php?id_carrera=$carrera"); 
}


  
?>