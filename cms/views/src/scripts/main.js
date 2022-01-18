// USUARIOS

$(".imagen").change(function () {
    var imagen = this.files[0];
  
    //validamos formato de imagen
    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
      $(".imagen").val("");
  
      Swal.fire({
        title: "¡Error al subir imagen!",
        text: "¡La imagen debe estar en formato JPG o PNG!",
        icon: "error",
        confirmButtonText: "Cerrar",
      });
    } else {
      var datosImagen = new FileReader();
      datosImagen.readAsDataURL(imagen);
  
      $(datosImagen).on("load", function (event) {
        var rutaImagen = event.target.result;
  
        $(".previsualizar").attr("src", rutaImagen);
      });
    }
  });
  
  $(".btnEditar").click(function () {
    var idEditarUsuario = $(this).attr("idEditarUsuario");
  
    var datos = new FormData();
  
    datos.append("idEditarUsuario", idEditarUsuario);
  
    $.ajax({
      url: "views/ajax/ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (respuesta) {
        $("#nombre").val(respuesta["nombre"]);
        $("#usuario").val(respuesta["usuario"]);
        $("#email").val(respuesta["email"]);
        $("#passwordE").val(respuesta["password"]);
        $("#rolE option:selected").val(respuesta["rol"]);
        if (respuesta["rol"] === "administrador") {
          $("#rolE option:selected").html("Administrador");
        } else {
          $("#rolE option:selected").html("Editor");
        }
        $("#fotoE").val(respuesta["foto"]);
        $("#visualizar img").attr("src", respuesta["foto"]);
        $("#id").val(respuesta["id"]);
      },
    });
  });
  
  $(".btnVer").click(function () {
    var idEditarUsuario = $(this).attr("idEditarUsuario");
  
    var datos = new FormData();
  
    datos.append("idEditarUsuario", idEditarUsuario);
  
    $.ajax({
      url: "views/ajax/ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (respuesta) {
        $("#nombreV").val(respuesta["nombre"]);
        $("#usuarioV").val(respuesta["usuario"]);
        $("#emailV").val(respuesta["email"]);
        if (respuesta["rol"] === "administrador") {
          $("#rolV").val("Administrador");
        } else {
          $("#rolV").val("Editor");
        }
  
        $("#visualizar img").attr("src", respuesta["foto"]);
      },
    });
  });
  
  $(".btnBorrar").click(function () {
    var idBorrarUsuario = $(this).attr("idBorrarUsuario");
    console.log(idBorrarUsuario);
  
    Swal.fire({
      title: "¿Estás seguro de borrar el usuario?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar el usuario!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=usuarios&idBorrarUsuario=" + idBorrarUsuario;
      }
    });
  });

  function borrarCategoria(id){
    var idBorrarCategoria = id;
  
    Swal.fire({
      title: "¿Estás seguro de borrar la categoría?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar el categoria!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=categorias&idBorrarCategoria=" + idBorrarCategoria;
      }
    });
  }

  
  function borrarProducto(id){
    var idBorrarProducto = id;
  
    Swal.fire({
      title: "¿Estás seguro de borrar la producto?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar el producto!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=productos&idBorrarProducto=" + idBorrarProducto;
      }
    });
  }

    
  function borrarImagen(id){
    var idBorrarImagen = id;
    var get = $('.btnBorrarImagen').attr('idGet')
  
    Swal.fire({
      title: "¿Estás seguro de borrar la imagen?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar la imagen!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=ver-producto&id="+get+"&idBorrarImagen=" + idBorrarImagen;
      }
    });
  }

  function borrarCotizacion(id){

    var idBorrarCotizar = id;
    
  
    Swal.fire({
      title: "¿Estás seguro de borrar la cotización?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar la cotización!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=cotizaciones&idBorrarCotizar=" + idBorrarCotizar;
      }
    });
  }

  function borrarContacto(id){

    var idBorrarContacto = id;
    
  
    Swal.fire({
      title: "¿Estás seguro de borrar el contacto?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar el contacto!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=contactos&idBorrarContacto=" + idBorrarContacto;
      }
    });
  }

  function borrarSuscriptor(id){

    var idBorrarSuscriptor = id;
    
  
    Swal.fire({
      title: "¿Estás seguro de borrar el suscriptor?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "¡Si, borrar el suscriptor!",
    }).then((result) => {
      if (result.value) {
        window.location =
          "index.php?pagina=suscriptores&idBorrarSuscriptor=" + idBorrarSuscriptor;
      }
    });
  }

 