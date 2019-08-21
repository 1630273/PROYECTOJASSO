<?php
    include("../conexion/conexion.php");

    include("../includes/headerAdmin.php");

$carrera=1;
    if(isset($_POST['guardar'])){
        $carrera=$_POST['carrera'];     
    } 
?>

<main class="conteiner ">
    <div class="row    ">
        <div class="col mx-5  ">
            <form method="post" >
                  

                <div class="from-group row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-md-6  mb-3">

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
                                    
                                        
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Acciones</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $obtener = "select Id_empleado, Nombre, Ap_paterno,Ap_materno from empleado where Id_carrera='".$carrera."' ";
                            $resultadosObtenidos = mysqli_query($conexion,$obtener);
                                    
                        while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                            <tr>
                            
                                
                                <td> <?php echo $row['Nombre'] ?> </td>
                                
                                
                                <td> <?php echo $row['Ap_paterno'] ?> </td>
                                <td> <?php echo $row['Ap_materno'] ?> </td>
    
                        
                                <td> 
                                 
                                 <a href="eliminar_maestro.php?Id_empleado=<?php echo $row['Id_empleado']?> "class="btn btn-danger">
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