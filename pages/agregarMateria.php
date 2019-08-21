<?php
 

    include("../includes/headerAdmin.php");

    if(isset($_POST['guardar'])){
       
            
            $nombre= $_POST['nombre'];
            
            $cat=$_POST['categoria'];
           
            $consulta = "INSERT INTO materia(Nombre_materia,Id_cat_materia) VALUES('$nombre','$cat')";
        
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
        <div class=" mt-3 d-flex justify-content-center" >
                    <h2> Alta de Materias</h2>            
         </div>
            <form method="post" >
                <div class="from-group row mt-3 d-flex justify-content-center" >
                    <div class="col-12 col-md-6  mb-3 ">

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre de la materia" class="form-control" requierd>
                    </div>
                   
                </div>

                <div class="from-group row mt-3 d-flex justify-content-center">
                    <div class="col-12 col-md-6  mb-3">
                        <label for="categoria">Categoria</label>
                            <select name="categoria" class="form-control">
                            <option value="0">Seleccione:</option>
                                <?php
                                $cargarcategorias = ("SELECT Id_cat_materia,Nombre FROM cat_materia");
                                $resultadosCategorias = mysqli_query($conexion,$cargarcategorias);
                                while ($row = mysqli_fetch_array($resultadosCategorias)) {?>
                                <option value="<?php echo $row['Id_cat_materia'] ?>"><?php echo $row['Nombre'] ?></option><?php
                                }
                                ?>
                            </select>
                    </div>
                </div>
                
                <div class="from-group row  d-flex justify-content-center">
                    <div class="col-6 col-md-6  mb-3 ">
                        <button class=" btn btn-success  btn-block mt-3 " name="guardar" > Guardar</button> 
                    </div>

                </div>

                 </div>
                 </form>
    
        </div> 
    </div>

    <div class="row mt-4" >
        <div class="col-12   ">
            <div class="d-flex justify-content-around ">
                <div class="col-6  table-responsive ">
                    <table class="table table-bordered">
                            <thead >
                                <tr>
                                    
                                        
                                        <th scope="col">Materia</th>
                                        <th scope="col">Categoria</th>
                                        <th>Eliminar</th
                                        
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $obtener = "select A.Nombre_materia,  A.Id_materia, B.Nombre FROM materia A INNER JOIN cat_materia AS B ON A.Id_cat_materia= B.Id_cat_materia ";
                            $resultadosObtenidos = mysqli_query($conexion,$obtener);
                                    
                        while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                            <tr>
                            
                                
                                <td> <?php echo $row['Nombre_materia'] ?> </td>
                                
                                
                                <td> <?php echo $row['Nombre'] ?> </td>
                                <td> 
                                 
                                <a href="eliminar_materia.php?Id_materia=<?php echo $row['Id_materia']?> "class="btn btn-danger">
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