<?php

require_once "../controladores/docentes.controlador.php";
require_once "../modelos/docentes.modelo.php";

class AjaxDocentes{

	/*=============================================
	EDITAR SUPERVISOR
	=============================================*/	

	public $idDocentes;

	public function ajaxEditarDocentes(){

		$item = "id";
		$valor = $this->idDocentes;

		$respuesta = ControladorDocentes::ctrMostrarDocente($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	ACTIVAR SUPERVISOR
	=============================================*/	

	public $activarDocente;
	public $activarId;


	public function ajaxActivarDocente(){

		$tabla = "docentes";

		$item1 = "estado";
		$valor1 = $this->activarDocente;

		$item2 = "id";
		$valor2 = $this->activarId;

		$respuesta = ModeloDocentes::mdlActualizarDocente($tabla, $item1, $valor1, $item2, $valor2);

	}

	/*=============================================
	VALIDAR NO REPETIR SUPERVISOR
	=============================================*/	

	public $validarDocente;

	public function ajaxValidarDocente(){

		$item = "docentes";
		$valor = $this->validarDocente;

		$respuesta = ControladorDocentes::ctrMostrarDocente($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR SUPERVISOR
=============================================*/
if(isset($_POST["idDocente"])){

	$editar = new AjaxDocentes();
	$editar -> idDocente = $_POST["idDocente"];
	$editar -> ajaxEditarDocentes();

}

/*=============================================
ACTIVAR SUPERVISOR
=============================================*/	

if(isset($_POST["activarDocente"])){

	$activarDocente = new AjaxDocentes();
	$activarDocente -> activarDocente = $_POST["activarDocente"];
	$activarDocente -> activarId = $_POST["activarId"];
	$activarDocente -> ajaxActivarDocente();

}

/*=============================================
VALIDAR NO REPETIR SUPERVISOR
=============================================*/

if(isset( $_POST["validarDocente"])){

	$valDocente = new AjaxDocentes();
	$valDocente -> validarDocente = $_POST["validarDocente"];
	$valDocente -> ajaxValidarDocente();

}