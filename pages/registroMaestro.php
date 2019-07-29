<?php
    include("../conexion/conexion.php");

    include("../includes/header.php");

    if(isset($_POST['registrar'])){
       
            $matricula=  $_POST['matricula'];
            $nombre= $_POST['nombre'];
            $AP=  $_POST['AP'];
            $AM=  $_POST['AM'];
            $correo =$_POST['correo'];
            $carrera=$_POST['carrera'];
            $consulta = "INSERT INTO maestros(Matricula_maestro,Nombre,Ap_paterno,Ap_materno,Correo_usuario,Id_carrera) VALUES('$matricula','$nombre','$AP','$AM','$correo','$carrera')";

            $resultado = mysqli_query($conexion,$consulta);
            
            if($resultado){
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
        <div class="col mx-5 ">
            <form method="post" >
                <div class="from-group row">
                    <div class="col-12 col-md-6  mb-3">
                        <label for="matricula">Matricula</label>
                        <input type="text" name="matricula" placeholder="Matricula" class="form-control" autofocus>
                    </div>
                    <div class="col-12 col-md-6  mb-3">    
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" >
                      
                    </div>
                </div>
                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="AP">Apellido Paterno</label>
                        <input type="text" name="AP" placeholder="Apellido Paterno" class="form-control" >
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="AM">Apellido Materno</label>
                        <input type="text" name="AM" placeholder="Apellido Materno" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
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
                    <div class="col-12 col-md-6  mb-3">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" placeholder="Correo" class="form-control" >
                    </div>
                </div>

                <div class="from-group row mt-3">
                    <div class="col-12 col-md-6  mb-3">

                        <label for="contraseña">Contraseña</label>
                        <input type="text" name="contra" placeholder="Contraseña" class="form-control" >
                    </div>
                    <div class="col-12 col-md-6  mb-3">
                        <label for="confir">Confirmar Contraseña</label>
                        <input type="text" name="confir" placeholder="Confirmar contraseña" class="form-control" >
                    </div>
                </div>
          
           
            <input type="submit"  class="  btn btn-success btn-block mt-3 " name="registrar" >
    
             </form>
    
        </div> 
    </div>
</main>    

<?php include('../includes/footer.php'); ?>