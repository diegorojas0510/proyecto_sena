<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Tablero

      <small>Panel de Control</small>

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Tablero</li>

    </ol>

  </section>

  <section class="content">

    <div class="row">

      <?php

      if ($_SESSION["perfil"] == "Administrador") {

        include "inicio/cajas-superiores.php";
      }

      ?>

    </div>


    <div class="col-lg-12">

      <?php

      if ($_SESSION["perfil"] == "Supervisor" || $_SESSION["perfil"] == "Supervisor") {

        echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' . $_SESSION["nombre"] . '</h1>

             </div>

             </div>';
             
      }

      ?>

    </div>

    <div class="col-lg-12">

      <?php

      if ($_SESSION["perfil"] == "Docente" || $_SESSION["perfil"] == "Docente") {

        echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' . $_SESSION["nombre"] . '</h1>

             </div>

             </div>';
      }

      ?>

    </div>

</div>

</section>

</div>