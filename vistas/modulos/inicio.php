<?php

error_reporting(0);

?>




<div class="content-wrapper" style="background-color:grey">

  <section class="content-header" style="color:orange">
    
    <h1>
      
      Tablero
      
      <small style="color:orange">Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb" >
      
      <li><a href="inicio" style="color:orange"><i class="fa fa-dashboard" style="color:orange"></i> Inicio</a></li>
      
      <li class="active" style="color:orange">Tablero</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/cajas-superiores.php";

    }

    ?>

    <!-- </div> 

     <div class="row">
       
        <div class="col-lg-12">

          <?php

          // if($_SESSION["perfil"] =="Administrador"){
          
          //  include "reportes/grafico-ventas.php";

          // }

          ?>

        </div> -->

        <!-- <div class="col-lg-6">

          <?php

        //   if($_SESSION["perfil"] =="Administrador"){
          
        //    include "reportes/productos-mas-vendidos.php";

        //  }

          ?>

        </div> -->

         <div class="col-lg-12">

          <?php

          if(($_SESSION["perfil"] =="Administrador")){
          
           include "inicio/productos-recientes.php";

         }

          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if(($_SESSION["perfil"] =="Especial") || ($_SESSION["perfil"] =="Vendedor")){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

             </div>

             </div>';

          }

          ?>

          <div class="col-lg-12">

            <?php

            if(($_SESSION["perfil"] =="Vendedor")){

              include "inicio/productos-recientes.php";

              }

            ?>

          </div>

         </div>

     </div>

  </section>
 
</div>
