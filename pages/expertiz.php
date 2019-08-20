<?php

    include("../includes/header.php");

    if (isset($_POST['Seleccionar[]'])) {

        // Checkbox is selected
    } else {
    
       // Alternate code
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
                        $obtener = "SELECT  Id_materia,Nombre FROM materia";
                        $resultadosObtenidos = mysqli_query($conexion,$obtener);
                                
                    while($row = mysqli_fetch_array($resultadosObtenidos)){?>

                        <tr>
                        <td>   <label ><input type="checkbox"  name="seleccion[]" value="<?php echo $val=$row['Id_materia']?>" > Confirmar</label>
                               </td>
                               
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