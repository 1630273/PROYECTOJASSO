<?php
 

    include("../includes/headerAdmin.php");

    if(isset($_POST['guardar'])){
       
            
            $nombre= $_POST['nombre'];
            
            $siglas=$_POST['siglas'];
           
            $consulta = "INSERT INTO carrera(Nombre,Siglas) VALUES('$nombre','$siglas')";
        
            $resultado = mysqli_query($conexion,$consulta);          
           

            $id_carrera=mysqli_insert_id($conexion);
           
    }

 
?>

<main class="conteiner ">
    <div class="row    ">
        <div class="col mx-5  ">
        <div class=" mt-3 d-flex justify-content-center" >
                    <h2> Alta de Carreras</h2>            
         </div>
            <form method="post" >
                
                <div class="from-group row mt-3 d-flex justify-content-center" >
                    <div class="col-12 col-md-6  mb-3 ">

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre de la Carrera" class="form-control" requierd>
                    </div>
                   
                </div>

                <div class="from-group row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-md-6  mb-3">
                         <label for="siglas">Siglas</label>
                        <input type="text" name="siglas" placeholder="Siglas de la carrera" class="form-control" requierd>
                   </div>
                </div>
                
                <div class="from-group row  d-flex justify-content-center">
                    <div class="col-6 col-md-6  mb-3 ">
                        <button class=" btn btn-success  btn-block mt-3 " name="guardar" > Guardar</button> 
                    </div>

                </div>
          
                <div class="row mt-4" >
                    <div class="col-12   ">
                        <div class="d-flex justify-content-around ">
                            <div class="col-6 table-responsive  ">
                                <table class="table table-bordered">
                                        <thead>
                                            <tr>    
                                                    <th>Carrera</th>
                                                    <th>Siglas</th>
                                                    <th>Agregar Materia</th>
                                                    <th>Eliminar</th>
                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                        $obtener = "select  Id_carrera,Nombre, Siglas FROM carrera ";
                                        $resultadosObtenidos = mysqli_query($conexion,$obtener);
                                                
                                    while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                                        <tr>
                                        
                                            
                                             <td> <?php echo $row['Nombre'] ?> </td>
                                            <td> <?php echo $row['Siglas'] ?> </td>
                                            
                                            <td> 
                                            
                                            <a href="agregarCarrera_materia.php?id_carrera=<?php echo $row['Id_carrera']?> "class="btn btn-success">
                                            <i class="fas fa-plus"></i>
                                            </a> 
                                        </td>
                                            <td> 
                                            
                                            <a href="eliminar_carrera.php?Id_carrera=<?php echo $row['Id_carrera']?> "class="btn btn-danger">
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
                
                 </form>
    
        </div> 
    </div>
</main>    

<?php include('../includes/footer.php'); ?>