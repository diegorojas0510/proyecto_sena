/*=============================================
EDITAR SUPERVISOR
=============================================*/
$(".tablas").on("click", ".btnEditarSupervisor", function(){

	var idSupervisor = $(this).attr("idSupervisor");

	var datos = new FormData();
    datos.append("idSupervisor", idSupervisor);

    $.ajax({

      url:"ajax/supervisor.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	   $("#idSupervisor").val(respuesta["id"]);
	       $("#editarSupervisor").val(respuesta["nombre"]);
	       $("#editarDocumentoId").val(respuesta["documento"]);
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarDireccion").val(respuesta["direccion"]);
           $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
	  }

  	})

})

/*=============================================
ELIMINAR SUPERVISOR
=============================================*/
$(".tablas").on("click", ".btnEliminarSupervisor", function(){

	var idSupervisor = $(this).attr("idSupervisor");
	
	swal({
        title: '¿Está seguro de borrar el Supervisor?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar supervisor!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=supervisor&idSupervisor="+idSupervisor;
        }

  })

})