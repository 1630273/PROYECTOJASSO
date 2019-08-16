<?php
    include("../conexion/conexion.php");

    include("../includes/headerAdmin.php");



    if(isset($_POST['guardar'])){
       
            $carrera=$_POST['carrera'];
            $numero=$_POST['numero'];
            $materia=$_GET['id_materia'];

            $consulta = "INSERT INTO materia_carrera(Id_materia,Id_carrera,Id_num_cuatri) VALUES('$materia','$carrera','$numero')";
        
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
</main>    

<?php include('../includes/footer.php'); ?>