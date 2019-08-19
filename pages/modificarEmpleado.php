<?php

include("../conexion/conexion.php");

include("../includes/header.php");
$cod_emp= '';
$nombre= '';
$AP=  '';
$AM=  '';
$correo ='';
$carrera='';
$tipo='';
$pass='';


if(isset($_GET['Id_empleado'])) {
    $Id_empleado = $_GET['Id_empleado'];
    $query = "SELECT *  FROM empleado WHERE Id_empleado=$Id_empleado";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $cod_emp =$row ['Cod_empleado'];
        $nombre =$row['Nombre'];
        $AP = $row['Ap_paterno'];
        $AM = $row['Ap_materno'];
        $correo= $row['Correo'];
        $pass = $row['Contrasena'];
        $tipo = $row['Id_tipo_empleado'];
        $carrera = $row['Id_carrera'];
        $pass=$row['Contrasena'];
       
        
    }
}

    if (isset($_POST['modificar'])) {
        $Id_empleado = $_GET['Id_empleado'];
        $cod_emp=  $_POST['cod_emp'];
        $nombre= $_POST['nombre'];
        $AP=  $_POST['AP'];
        $AM=  $_POST['AM'];
        $correo =$_POST['correo'];
        $carrera=$_POST['carrera'];
        $tipo=$_POST['tipo'];
        $pass=$_POST['confir'];
      
        $query = "UPDATE empleado set Cod_empleado = '$cod_emp', Nombre = '$nombre', Ap_paterno = '$AP', Ap_materno = '$AM'
        ,Correo ='$correo', Id_carrera='$carrera', Id_tipo_empleado='$tipo' WHERE Id_empleado= $Id_empleado ";
        mysqli_query($conexion, $query);

         
      

    
    header('Location:registro2.php'); 
}


  
?>


<main class="conteiner">
    <div class="row    ">
        <div class="col mx-5  ">
            <form action="modificarEmpleado.php?Id_empleado=<?php echo $_GET['Id_empleado']; ?> "method="post">
                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">
                        <label for="cod_emp">Codigo de empleado</label>
                        <input type="text" name="cod_emp" value="<?php echo $cod_emp; ?>" placeholder="Codigo de empleado" class="form-control" requierd>
                    </div>
                    <div class="col-12 col-md-6  mb-3">    
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre" class="form-control" requierd>
                      
                    </div>
                </div>
                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="AP">Apellido Paterno</label>
                        <input type="text" name="AP" value="<?php echo $AP; ?>" placeholder="Apellido Paterno" class="form-control" requierd>
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="AM">Apellido Materno</label>
                        <input type="text" name="AM"  value="<?php echo $AM; ?>" placeholder="Apellido Materno" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
                    <div class="col-6 col-md-3  mb-3">

                        <label for="tipo">Tipo Usuario</label>
                        <select name="tipo" class="form-control">
                        <option value="<?php echo $tipo; ?>>Seleccione:</option>
                            <?php
                            $cargartipos = ("SELECT Id_tipo_empleado,Nombre FROM tipo_empleado");
                            $resultadostipos = mysqli_query($conexion,$cargartipos);
                            while ($row = mysqli_fetch_array($resultadostipos)) {?>
                            <option value="<?php echo $row['Id_tipo_empleado'] ?>"><?php echo $row['Nombre'] ?></option><?php
                            }
                            ?>
                        </select>
               
                    </div>
                    <div class="col-6 col-md-3  mb-3">

                        <label for="carrera">Carrera</label>
                        <select name="carrera" class="form-control">
                        <option value="<?php echo $carrera ?>>Seleccione:</option>
                            <?php
                            $cargarcarreras = ("SELECT id_carrera,siglas FROM carrera");
                            $resultadosCarreras = mysqli_query($conexion,$cargarcarreras);
                            while ($row = mysqli_fetch_array($resultadosCarreras)) {?>
                            <option value="<?php echo $row['id_carrera'] ?>"><?php echo $row['siglas'] ?></option><?php
                            }
                            ?>
                        </select>
                    </div>
                
                    <div class="col-12 col-md-6  mb-3">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" value="<?php echo $correo ?>" placeholder="Correo" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contra" value="<?php echo $pass ?>" placeholder="Contraseña" class="form-control" >
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="confir">Confirmar Contraseña</label>
                        <input type="password" name="confir" value="<?php echo $pass ?>" placeholder="Confirmar contraseña" class="form-control" >
                    </div>
                </div>
          
           
                <button class=" btn btn-success btn-block mt-3" name="modificar"> Modificar</button>
    
             </form>
    
        </div> 
    </div>
</main>    

<?php include('../includes/footer.php'); ?>