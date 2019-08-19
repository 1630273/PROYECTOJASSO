<?php
    include("../conexion/conexion.php");

    include("../includes/header.php");
    ?>

    <main class="container ">
        <div clas="row ">
           <div class="contenedor d-flex justify-content-around ">
                <div class="col-3 mt-4  ">
                    <div class=" bg-success text-white ">
                        <div class="d-flex">
                            <div class="my-3 mx-3">
                            <i class="far fa-calendar-alt fa-4x"></i>
                            </div>
                            <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                <p  class="h5">Disponibilidad</p> 
                                <p  class="h5">de Horario</p>
                            </div>
                        </div>    
                        <div>
                        <a href="#" class="btn btn-block btn-success "> <i class="fas fa-arrow-circle-right fa-sm  mx-2"></i>Ir al Horario</a>
                        </div>
                    </div>              
                </div> 

                <div class="col-3 mt-4  ">
                    <div class=" bg-success text-white ">
                            <div class="d-flex">
                                <div class="my-3 mx-3">
                                <i class="fas fa-address-card fa-4x"></i>
                                </div>
                                <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                    <p  class="h5">Expertiz </p> 
                                    <p  class="h5">En Materias</p>
                                </div>
                            </div>    
                            <div>
                            <a href="#" class="btn btn-block btn-success "> <i class="fas fa-arrow-circle-right fa-sm  mx-2"></i>Ir al Horario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    
    
    </main>


    <?php include('../includes/footer.php'); ?>