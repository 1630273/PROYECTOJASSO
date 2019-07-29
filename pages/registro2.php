<?php
    include("../conexion/conexion.php");

    include("../includes/header.php");

    if(isset($_POST['registrar'])){
        if(strlen($_POST['matricula'])>=1 && strlen($_POST['nombre'])>=1 && strlen($_POST['AP'])>=1 && strlen($_POST['nombre'])>=1){
            $matricula=  $_POST['matricula'];
            $nombre= $_POST['nombre'];
            $AP= $_POST['AP'];
            $AM= $_POST['AM'];
            $consulta = "INSERT INTO MAESTROS(Matricula_maestro,Nombre,Ap_paterno,Ap_materno) VALUES('$matricula','$nombre','$AP','$AM')";

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
    }

?>

<main class="conteiner">
    <div class="row d-flex justify-content-center   ">
        <div class="col-4   ">
            <form method="post" >
            <h1>REGISTRO</h1>
        
            <input type="text" name="matricula" placeholder="Matricula" class="form-control" autofocus>
            <input type="text" name="nombre" placeholder="Nombres" class="form-control" >
            <input type="text" name="AP" placeholder="Apellido Patero" class="form-control" >
            <input type="text" name="AM" placeholder="Apellido Materno" class="form-control" >
            <input type="submit"  class="btn btn-success " name="registrar" >
    
             </form>
    
        </div> 
    </div>
    <div class="row mt-4" >
        <div class="col-8   ">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido P</th>
                            <th>Apellido M</th>
                            <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obtener = "SELECT id_maestro,Matricula_maestro,Nombre,Ap_paterno,Ap_materno FROM maestros";
                    $resultadosObtenidos = mysqli_query($conexion,$obtener);
                    
                    while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                        <tr>
                            <td> <?php echo $row['Matricula_maestro'] ?> </td>
                            <td> <?php echo $row['Nombre'] ?> </td>
                            <td> <?php echo $row['Ap_paterno'] ?> </td>
                            <td> <?php echo $row['Ap_materno'] ?> </td>
                            <td> 
                                <a href="modificar.php?id_maestro=<?php echo $row['id_maestro']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                                </a>  
                                <a href="eliminar.php?id_maestro=<?php echo $row['id_maestro']?>"class="btn btn-danger">
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