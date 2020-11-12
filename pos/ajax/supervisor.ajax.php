<?php

require_once "../controladores/supervisor.controlador.php";
require_once "../modelos/supervisor.modelo.php";

class AjaxSupervisor{

	/*=============================================
	EDITAR SUPERVISOR
	=============================================*/	

	public $idSupervisor;

	public function ajaxEditarSupervisor(){

		$item = "id";
		$valor = $this->idSupervisor;

		$respuesta = ControladorSupervisor::ctrMostrarSupervisor($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR SUPERVISOR
	=============================================*/	

	public $activarSupervisor;
	public $activarId;


	public function ajaxActivarSupervisor(){

		$tabla = "supervisores";

		$item1 = "estado";
		$valor1 = $this->activarSupervisor;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = ModeloSupervisor::mdlActualizarSupervisor($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR SUPERVISOR
	=============================================*/	

	public $validarSupervisor;

	public function ajaxValidarSupervisor(){

		$item = "supervisor";
		$valor = $this->validarSupervisor;

		$respuesta = ControladorSupervisor::ctrMostrarSupervisor($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR SUPERVISOR
=============================================*/
if(isset($_POST["idSupervisor"])){

	$editar = new AjaxSupervisor();
	$editar -> idSupervisor = $_POST["idSupervisor"];
	$editar -> ajaxEditarSupervisor();

}

/*=============================================
ACTIVAR SUPERVISOR
=============================================*/	

if(isset($_POST["activarSupervisor"])){

	$activarSupervisor = new AjaxSupervisor();
	$activarSupervisor -> activarSupervisor = $_POST["activarSupervisor"];
	$activarSupervisor -> activarId = $_POST["activarId"];
	$activarSupervisor -> ajaxActivarSupervisor();

}

/*=============================================
VALIDAR NO REPETIR SUPERVISOR
=============================================*/

if(isset( $_POST["validarSupervisor"])){

	$valSupervisor = new AjaxSupervisor();
	$valSupervisor -> validarSupervisor = $_POST["validarSupervisor"];
	$valSupervisor -> ajaxValidarSupervisor();

}