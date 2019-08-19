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
    


    <div class="row mt-4" >
        <div class="col-12   ">
            <div class="d-flex justify-content-around ">
            <div class="col-8   ">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                    <th >Seleccion</th>
                                    <th>Materia</th>
                                    <th>Expertiz</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $obtener = "SELECT  Id_Materia,Nombre FROM materia";
                            $resultadosObtenidos = mysqli_query($conexion,$obtener);
                            
                            while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                                <tr>
                                    <td> <input type="checkbox"  name="seleccion" id="defaultUnchecked"> </td>
                                    <td> <?php echo $row['Nombre'] ?> </td>
                            
                                    <td> 
                                    <select name="Expertiz" class="form-control" disabled>
                                    <option value="0">Seleccione:</option>
                                    <?php
                                    $cargarExpertiz = ("SELECT Id_expertiz,Nombre FROM expertiz");
                                    $resultadosExpertiz= mysqli_query($conexion,$cargarExpertiz);
                                    while ($row = mysqli_fetch_array($resultadosExpertiz)) {?>
                                    <option value="<?php echo $row['Id_expertiz'] ?>"><?php echo $row['Nombre'] ?></option><?php
                                    }
                                    ?>
                                </select> 
                                    </td>
                                </tr>
                                <?php } ?>
                            
                        </tbody>
                    </table> 
                    <input type="submit"  class="  btn btn-success btn-block mt-3 " name="registrar" >
                    </div>
            </div>
        </div>    
    </div>
</main>


    <?php include('../includes/footer.php'); ?>