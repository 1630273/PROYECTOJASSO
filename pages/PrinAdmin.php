<?php
    include("../conexion/conexion.php");

    include("../includes/headerAdmin.php");
    ?>

    <main class="container ">
        <div clas="row no-wrap ">
           <div class="contenedor d-flex  ">
                <div class="col-3 mt-4  ">
                    <div class=" bg-success text-white ">
                        <div class="d-flex">
                            <div class="my-3 mx-3">
                            <i class="fas fa-book fa-4x"></i>
                            </div>
                            <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                <p  class="h5">Alta De</p> 
                                <p  class="h5">Carreras</p>
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
                            <i class="far fa-list-alt fa-4x"></i>
                            </div>
                            <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                <p  class="h5">Alta De</p> 
                                <p  class="h5">Cuatrimestres</p>
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
                                <i class="fas fa-user-plus fa-4x"></i>
                                </div>
                                <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                    <p  class="h5">Alta De </p> 
                                    <p  class="h5">Maestros</p>
                                </div>
                            </div>    
                            <div>
                            <a href="#" class="btn btn-block btn-success "> <i class="fas fa-arrow-circle-right fa-sm  mx-2"></i>Ir al Horario</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 mt-4  ">
                    <div class=" bg-success text-white ">
                            <div class="d-flex">
                                <div class="my-3 mx-3">
                                <i class="fas fa-school fa-4x"></i>
                                </div>
                                <div class="my-2 mx-2 d-flex-block  justify-content-center" >
                                    <p  class="h5">Alta De </p> 
                                    <p  class="h5">Plan De Estudios</p>
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