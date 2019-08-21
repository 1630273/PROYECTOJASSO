<?php

include("../conexion/conexion.php");

if(isset($_GET['Id_materia'])) {
  
    $id = $_GET['Id_materia'];
    $query = "DELETE FROM materia WHERE Id_materia = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("error al eliminar.");
    }else {
      echo"elimidado";
    }

  header("Location:mostrarMaterias.php"); 
}


  
?>