/*=============================================
EDITAR DOCENTE
=============================================*/
$(".tablas").on("click", ".btnEditarDocente", function () {

  var idDocente = $(this).attr("idDocente");

  var datos = new FormData();
  datos.append("idDocente", idDocente);

  $.ajax({

    url: "ajax/docente.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {

      $("#idDocente").val(respuesta["id"]);
      $("#editarDocente").val(respuesta["nombre"]);
      $("#editarDocumentoId").val(respuesta["documento"]);
      $("#editarEmail").val(respuesta["email"]);
      $("#editarTelefono").val(respuesta["telefono"]);
      $("#editarDireccion").val(respuesta["direccion"]);
      $("#editarFechaNacimiento").val(respuesta["fecha_nacimiento"]);
    }

  })

})

/*=============================================
ELIMINAR DOCENTES
=============================================*/
$(".tablas").on("click", ".btnEliminarDocente", function () {

  var idDocente = $(this).attr("idDocente");

  swal({
    title: '¿Está seguro de borrar el docente?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, borrar docente!'
  }).then(function (result) {
    if (result.value) {

      window.location = "index.php?ruta=docentes&idDocente=" + idDocente;
    }

  })

})