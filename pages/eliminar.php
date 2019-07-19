<?php

include("../conexion/conexion.php");

if(isset($_GET['id_maestro'])) {
    $id = $_GET['id_maestro'];
    $query = "DELETE FROM MAESTROS WHERE id_maestro = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result) {
      die("error al eliminar.");
    }

    header('Location:registro2.php'); 
}


  
?>