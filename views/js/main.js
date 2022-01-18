function crearCookie(nombre, valor, diasExpedicion) {
  var hoy = new Date();

  hoy.setTime(hoy.getTime() + diasExpedicion * 24 * 60 * 60 * 1000);

  var fechaExpedicion = "expires=" + hoy.toUTCString();

  document.cookie = nombre + "=" + valor + "; " + fechaExpedicion;
}

function refrescar() {
  window.location.reload();
}

function anadirLista(id) {
  var obtenerProducto = id;
  var obtenerCantidad = $(`.producto${id}`).val();
  var cantidad = parseInt(obtenerCantidad);

  var datos = new FormData();

  datos.append("obtenerProducto", obtenerProducto);

  $.ajax({
    url: "views/ajax/ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      if (cantidad >= 1) {
        var precio1 = respuesta.precio.replace(/[$.]/g, "");
        var precio2 = parseInt(precio1);
        var precio3 = precio2 * cantidad;
        var idP = parseInt(obtenerProducto);

        let info = {
          nombre: respuesta.nombre,
          imagen: respuesta.imagen,
          precio: precio3,
          cantidad: cantidad,
          id: idP,
        };

        let lista = [];
        lista.push(info);
        let carrito = JSON.parse(localStorage.getItem("Lista"));

        if (!carrito) {
          localStorage.setItem("Lista", JSON.stringify(lista));
          crearCookie("Lista", JSON.stringify(lista), 1);
          $.toast({
            heading: "¡Item añadido!",
            text: "Has añadido el producto a la lista",
            showHideTransition: "slide",
            icon: "success",
            position: "top-center",
          });

          setTimeout(refrescar, 3000);
        } else {
          carrito.forEach((element) => {
            if (element.id !== idP) {
              lista.push(element);
            }
          });

          localStorage.setItem("Lista", JSON.stringify(lista));
          crearCookie("Lista", JSON.stringify(lista), 1);
          $.toast({
            heading: "¡Item añadido!",
            text: "Has añadido el producto a la lista",
            showHideTransition: "slide",
            icon: "success",
            position: "top-center",
          });

          setTimeout(refrescar, 3000);
        }
      } else {
        $.toast({
          heading: "¡Imposible añadir a lista!",
          text: "La cantidad debe ser igual o mayor a 1",
          showHideTransition: "slide",
          icon: "warning",
          position: "top-center",
        });

        setTimeout(refrescar, 3000);
      }
    },
  });
}

function verCarrito() {
  var carrito = JSON.parse(localStorage.getItem(`Lista`));

  if (carrito) {
    let total = 0;

    carrito.forEach((element, index) => {
      if ($(`.producto${index}`)) {
        $(`.producto${index}`).remove();
      }

      $(".cart-list").append(
        //html
        `
        <li class="producto${index}">
          <a href="#" class="photo"><img src="cms/${
            element.imagen
          }" class="cart-thumb" alt="" /></a>
          <h6><a href="#">${element.nombre} </a></h6>
          <p>${element.cantidad}x - <span class="price">$${Intl.NumberFormat(
          "de-DE"
        ).format(element.precio)}</span>
        <button type="button" class="btn btn-danger btn-sm float-right" onclick=" borrarItem(${index})"><i class="fa fa-times"></i></button>
        </p>
       </li>
       `
      );

      total += element.precio;
      var totalCarrito = new Intl.NumberFormat("de-DE").format(total);
      $("#total").html(totalCarrito);
      localStorage.setItem("TotalCarrito", JSON.stringify(totalCarrito));
      crearCookie("TotalCarrito", totalCarrito, 1);
    });

    return total;
  } else {
    if ($(`.noH`)) {
      $(`.noH`).remove();
    }
    $(".cart-list").append(
      //html
      `
      <li class="noH">
        <p>No hay productos</p>
     </li>
     `
    );
    $("#total").html(0);
  }
}

function borrarItem(id) {
  const carrito = JSON.parse(localStorage.getItem("Lista"));

  if (id > -1) {
    carrito.splice(id, 1);

    localStorage.setItem("Lista", JSON.stringify(carrito));
    crearCookie("Lista", JSON.stringify(carrito), 1);

    $.toast({
      heading: "¡Item borrado!",
      text: "Has borrado el producto de la lista",
      showHideTransition: "slide",
      icon: "success",
      position: "top-center",
    });

    setTimeout(refrescar, 3000);
  }
}

function form() {
  const carrito = JSON.parse(localStorage.getItem("Lista"));

  if (!carrito) {
    $.toast({
      heading: "¡Imposible continuar!",
      text: "No hay productos en la lista",
      showHideTransition: "slide",
      icon: "warning",
      position: "top-center",
    });
  } else {
    window.location = "formulario";
  }
}

$(".contact-box-main").hover(function () {
  const carrito = JSON.parse(localStorage.getItem("Lista"));
  const total = JSON.parse(localStorage.getItem("TotalCarrito"));

  carrito.forEach((element, index) => {
    if ($(`.item${index}`)) {
      $(`.item${index}`).remove();
    }

    $(".tuLista").append(
      //html
      `
      <li class="item${index}">
      <div class="row">
          <div class="col-md-6">
              <span style="color: #b0b435" class="text-uppercase"><i class="fa fa-check"></i> ${element.nombre}</span>
          </div>
          <div class="col-md-6">
              <span class="float-right">${element.cantidad}x - $${element.precio}</span>
          </div>
      </div>

  </li>
      `
    );
  });

  $("#tuLista").val(JSON.stringify(carrito));
  $("#totalLista").html(total);
  $("#totalCarrito").val(total);
});

function submitForm() {
  var nombre = $("#nombreForm").val();
  var email = $("#emailForm").val();
  var tel = $("#telForm").val();
  var dni = $("#dniForm").val();
  var dom = $("#domForm").val();
  var ciudad = $("#ciudadForm").val();
  var provincia = $("#provinciaForm").val();
  var datos = JSON.parse(localStorage.getItem("Lista"));
  var total = JSON.parse(localStorage.getItem("TotalCarrito"));
  // var items = $('#tuLista').val();
  // var total = $('#totalCarrito').val();
  var items = [];

  datos.forEach((element) => {
    var name = element.nombre;
    var cantidad = element.cantidad;
    var precio = element.precio;

    items.push({ item: name, cantidad: cantidad, precio: precio });
  });

  console.log(items);
  console.log(total);

  if (!nombre || !email || !tel || !dni || !dom || !ciudad || !provincia) {
    Swal.fire(
      "¡Complete todos los campos requeridos (*)!",
      "Haga click en OK para continuar",
      "warning"
    );
  } else {
    var data = {
      nombre: nombre,
      email: email,
      tel: tel,
      dom: dom,
      ciudad: ciudad,
      provincia: provincia,
      datos: JSON.stringify(items),
      total: total,
    };

    crearCookie("Formulario", JSON.stringify(data), 1);
  }
}

function contactForm() {
  var nombre = $("#nombreC").val();
  var email = $("#emailC").val();
  var mensaje = $("#mensajeC").val();
  var asunto = $("#asuntoC").val();

  if (!nombre || !email || !mensaje || !asunto) {
    Swal.fire(
      "¡Complete todos los campos requeridos (*)!",
      "Haga click en OK para continuar",
      "warning"
    );
  } else {
    var data = {
      nombre: nombre,
      email: email,
      asunto: asunto,
      mensaje: mensaje,
    };
  
    crearCookie("Contacto", JSON.stringify(data), 1);
  }
}
