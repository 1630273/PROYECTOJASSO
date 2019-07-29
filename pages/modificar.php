<?php

include("../conexion/conexion.php");
$matricula = '';
$nombre ='';
$apellidoP ='';
$apellidoM  ='';


if(isset($_GET['id_maestro'])) {
    $id_maestro = $_GET['id_maestro'];
    $query = "SELECT id_maestro,Matricula_maestro,Nombre,Ap_paterno,Ap_materno FROM MAESTROS WHERE id_maestro=$id_maestro";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $matricula =$row ['Matricula_maestro'];
        $nombre =$row['Nombre'];
        $apellidoP = $row['Ap_paterno'];
        $apellidoM = $row['Ap_materno'];
    }
}

    if (isset($_POST['modificar'])) {
        $id_maestro = $_GET['id_maestro'];
        $matricula =$_POST['matricula'];
        $nombre =$_POST['nombre'];
        $apellidoP = $_POST['AP'];
        $apellidoM = $_POST['AM'];
      
        $query = "UPDATE MAESTROS set Matricula_maestro = ' $matricula', Nombre = '$nombre', Ap_paterno = '$apellidoP', Ap_materno = '$apellidoM'  WHERE id_maestro= $id_maestro";
        mysqli_query($conexion, $query);
    
    header('Location:registro2.php'); 
}


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- BOOTSTRAP 4 -->
       <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
      <!-- FONT AWESOEM -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Document</title>

    <form   action="modificar.php?id_maestro=<?php echo $_GET['id_maestro']; ?> "method="post">
        <h1>MODIFICAR</h1>
        
        <input type="text" name="matricula" placeholder="Matricula" class="form-control" value="<?php echo $matricula; ?>">
        <input type="text" name="nombre" placeholder="Nombres" class="form-control" value="<?php echo $nombre; ?>">
        <input type="text" name="AP" placeholder="Apellido Patero" class="form-control" value="<?php echo $apellidoP; ?>" >
        <input type="text" name="AM" placeholder="Apellido Materno" class="form-control" value="<?php echo $apellidoM; ?>">
        <button class="btn-success" name="modificar"> Update</button>
    </form>
</div>

</head>
<body>
    
</body>
</html>