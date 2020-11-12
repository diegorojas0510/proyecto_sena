<?php

$item = null;
$valor = null;
$orden = "id";

$supervisor = ControladorSupervisor::ctrMostrarSupervisor($item, $valor);
$totalSupervisor = count($supervisor);

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$docentes = ControladorDocentes::ctrMostrarDocente($item, $valor);
$totalDocente = count($docentes);

$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
$totalUsuarios = count($usuarios);

?>

<!--SUPERVISOR-->

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h3><?php echo number_format($totalSupervisor); ?></h3>

      <p>Supervisor</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="supervisor" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!--CATEGORIAS-->

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalCategorias); ?></h3>

      <p>Categorías</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!--DOCENTES-->

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalDocente); ?></h3>

      <p>Docentes</p>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="docentes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>

<!--USUARIOS-->

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    
    <h3><?php echo number_format($totalUsuarios); ?></h3>

      <p>Usuarios</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="usuarios" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

