<?php

include("../conexion/conexion.php");

if(isset($_GET['Id_empleado'])) {
    $id = $_GET['Id_empleado'];
    $query = "DELETE FROM empleado WHERE Id_empleado = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("error al eliminar.");
    }

    header('Location:registro2.php'); 
}


  
?>