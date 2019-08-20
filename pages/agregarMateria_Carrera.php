<?php
    include("../conexion/conexion.php");

    include("../includes/headerAdmin.php");

    $carrera=$_GET['id_carrera'];

    if(isset($_POST['guardar'])){
       
            $materia=$_POST['materia'];
            $numero=$_POST['numero'];
            $carrera=$_GET['id_carrera'];

            $consulta = "INSERT INTO materia_carrera(Id_materia,Id_num_cuatri,Id_carrera) VALUES('$materia','$numero','$carrera')";
        
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

<main class="conteiner ">
    <div class="row    ">
        <div class="col mx-5  ">
            <form method="post" >
                 <div class="from-group row mt-3 d-flex justify-content-center" >
                    <div class="col-12 col-md-6  mb-3 ">
                   
                    <label for="numer">Cuatrimestre</label>
                        <select name="numero" class="form-control">
                        <option value="0">Seleccione:</option>
                            <?php
                            $cargarcuatris = ("SELECT Id_num_cuatri,Nombre FROM num_cuatri");
                            $resultadosCuatris = mysqli_query($conexion,$cargarcuatris);
                            while ($row = mysqli_fetch_array($resultadosCuatris)) {?>
                            <option value="<?php echo $row['Id_num_cuatri'] ?>"><?php echo $row['Nombre'] ?></option><?php
                            }
                            ?>
                        </select>
                    </div>
                </div>     

                <div class="from-group row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-md-6  mb-3">

                    <label for="materia">Materia</label>
                        <select name="materia" class="form-control">
                        <option value="0">Seleccione:</option>
                            <?php
                            $cargarcarreras = ("SELECT Id_materia,Nombre_materia FROM materia");
                            $resultadosCarreras = mysqli_query($conexion,$cargarcarreras);
                            while ($row = mysqli_fetch_array($resultadosCarreras)) {?>
                            <option value="<?php echo $row['Id_materia'] ?>"><?php echo $row['Nombre_materia'] ?></option><?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="  d-flex justify-content-center ">
                   <div class="col-12 col-md-6  mb-3 ">
                        <button class=" btn btn-success btn-block mt-3   " name="guardar"> Guardar</button>
                    </div>

                 </div>
             </form>   
        </div> 
    </div>

       
    <div class="row mt-4" >
        <div class="col-12   ">
            <div class="d-flex justify-content-around ">
                <div class="col-6   ">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    
                                        
                                        <th>Materia</th>
                                        <th>Cuatrimestre</th>
                                        <th>Acciones</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $obtener = "select A.Nombre_materia, C.Nombre, B.Id_materia_carrera, B.Id_carrera FROM materia A INNER JOIN materia_carrera AS B ON A.Id_materia= B.Id_materia
                             INNER JOIN  num_cuatri AS C ON C.Id_num_cuatri =B.Id_num_cuatri WHERE B.Id_carrera='".$carrera."' ";
                            $resultadosObtenidos = mysqli_query($conexion,$obtener);
                                    
                        while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                            <tr>
                            
                                
                                <td> <?php echo $row['Nombre_materia'] ?> </td>
                                
                                
                                <td> <?php echo $row['Nombre'] ?> </td>
                                <td> 
                                 
                                <a href="eliminar_materia.php?Id_materia_carrera=<?php echo $row['Id_materia_carrera']?>&Id_carrera=<?php echo $row['Id_carrera']?> "class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a> 
                            </td>
    
                        
        
                            </tr>
                            <?php } ?>
                        
                    </tbody>
                    </table> 

                        
                </div>
            </div>
        </div>    
    </div>
</main>    

<?php include('../includes/footer.php'); ?>