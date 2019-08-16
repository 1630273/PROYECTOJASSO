<?php
    include("../conexion/conexion.php");

    include("../includes/headerAdmin.php");

    if(isset($_POST['guardar'])){
       
            
            $nombre= $_POST['nombre'];
            
            $cat=$_POST['categoria'];
           
            $consulta = "INSERT INTO materia(Nombre,Id_cat_materia) VALUES('$nombre','$cat')";
        
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

            $id_materia=mysqli_insert_id($conexion);
           
    }

 
?>

<main class="conteiner ">
    <div class="row    ">
        <div class="col mx-5  ">
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
          

                 <div class="from-group row   d-flex justify-content-end ">
                   <div class="col-12 col-md-6  mb-3  ">
                      <a href="agregarMateria_Carrera.php?id_materia=<?php echo $id_materia?>" class="btn btn-primary"> Siguiente
                      <i class="fas fa-arrow-circle-right fa-sm  mx-2"></i>
                      </a>
                    </div>

                 </div>
                 </form>
    
        </div> 
    </div>
</main>    

<?php include('../includes/footer.php'); ?>