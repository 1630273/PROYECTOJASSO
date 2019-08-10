<?php
    include("../conexion/conexion.php");

    include("../includes/header.php");

    if(isset($_POST['registrar'])){
       
            $cod_emp=  $_POST['cod_emp'];
    
            $nombre= $_POST['nombre'];
            $AP=  $_POST['AP'];
            $AM=  $_POST['AM'];
            $correo =$_POST['correo'];
            $carrera=$_POST['carrera'];
            $tipo=$_POST['tipo'];
            $pass=$_POST['confir'];
            $consulta = "INSERT INTO empleado(Cod_empleado,Nombre,Ap_paterno,Ap_materno,Correo,Contrasena,Id_tipo_empleado,Id_carrera) VALUES('$cod_emp','$nombre','$AP','$AM','$correo','$pass','$carrera','$tipo')";
        
            $resultado = mysqli_query($conexion,$consulta);          
           
            
            if($resultado ){
                ?>
                <h3>Registro exitoso</h3>
                <?php
            } else {
                ?>
                <h3>HA ocurrido un error</h3>
                <?php
            }

        
    }

?>

<main class="conteiner">
    <div class="row    ">
        <div class="col mx-5  ">
            <form method="post" >
                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">
                        <label for="cod_emp">Codigo de empleado</label>
                        <input type="text" name="cod_emp" placeholder="Codigo de empleado" class="form-control" requierd>
                    </div>
                    <div class="col-12 col-md-6  mb-3">    
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" requierd>
                      
                    </div>
                </div>
                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="AP">Apellido Paterno</label>
                        <input type="text" name="AP" placeholder="Apellido Paterno" class="form-control" requierd>
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="AM">Apellido Materno</label>
                        <input type="text" name="AM" placeholder="Apellido Materno" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
                    <div class="col-6 col-md-3  mb-3">

                        <label for="tipo">Tipo Usuario</label>
                        <select name="tipo" class="form-control">
                        <option value="0">Seleccione:</option>
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
                        <option value="0">Seleccione:</option>
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
                        <input type="text" name="correo" placeholder="Correo" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="contraseña">Contraseña</label>
                        <input type="password"  name="contra" placeholder="Contraseña" class="form-control" >
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="confir">Confirmar Contraseña</label>
                        <input type="password"  name="confir" placeholder="Confirmar contraseña" class="form-control" >
                    </div>
                </div>
          
           
            <input type="submit"  class="  btn btn-success btn-block mt-3 " name="registrar" >
    
             </form>
    
        </div> 
    </div>


    <div class="row mt-4" >
        <div class="col-8   ">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo Empleado</th>
                            <th>Nombre</th>
                            <th>Apellido P</th>
                            <th>Apellido M</th>
                            <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obtener = "SELECT  Id_empleado,Cod_empleado,Nombre,Ap_paterno,Ap_materno FROM empleado";
                    $resultadosObtenidos = mysqli_query($conexion,$obtener);
                    
                    while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                        <tr>
                            <td> <?php echo $row['Cod_empleado'] ?> </td>
                            <td> <?php echo $row['Nombre'] ?> </td>
                            <td> <?php echo $row['Ap_paterno'] ?> </td>
                            <td> <?php echo $row['Ap_materno'] ?> </td>
                            <td> 
                                <a href="modificarEmpleado.php?Id_empleado=<?php echo $row['Id_empleado']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                                </a>  
                                <a href="eliminar.php?Id_empleado=<?php echo $row['Id_empleado']?>"class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a> 
                            </td>
                        </tr>
                        <?php } ?>
                    
                </tbody>
            </table> 

        </div>
    </div>
</main>


    <?php include('../includes/footer.php'); ?>