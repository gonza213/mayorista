<?php

use \Mailjet\Resources;

if (isset($_COOKIE['Formulario'])) {

    $datos = json_decode($_COOKIE['Formulario']);
    $nombre = $datos->nombre;
    $email2 = $datos->email;
    $tel = $datos->tel;
    $dom = $datos->dom;
    $ciudad = $datos->ciudad;
    $provincia = $datos->provincia;
    $data = $datos->datos;
    $total = $datos->total;

    $mj = new \Mailjet\Client('9bd175aba2ace49ece58030b6ada6053', '1292e1ece0cc2c36b9a99fc0494875aa', true, ['version' => 'v3.1']);
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "info@tuscomprasonline.com.ar",
                    'Name' => "tutiendaonline"
                ],
                'To' => [
                    [
                        'Email' => "info@tuscomprasonline.com.ar",
                        'Name' => "tutiendaonline"
                    ]
                ],
                'Subject' => "Nueva Solicitud de " . $nombre . "",
                'TextPart' => "Cotización",
                'HTMLPart' => "<h4>Datos del cliente:</h4>
        <ul><li>Email: <b>" . $email2 . "</b> </li><li>Teléfono: <b>" . $tel . "</b> </li><li>Domicilio: <b>" . $dom . "</b> </li><li>Ciudad: <b>" . $ciudad . "</b>. Provincia: <b>" . $provincia . "</b> </li></ul> <br />
        <p> <span style='color: #000'>Items</span>: " . $data . " </p>
        <h4> Total: $" . $total . " </h4>
        <br />Solicitud desde el sitio web de TUSCOMPRASONLINE.COM.AR",
                'Headers' => [
                    'Reply-To' => $email2
                ]
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();

    echo '<script> document.cookie = "Formulario=; expires=Thu, 01 Jan 1970 00:00:00 UTC;"; </script>';
}

if (isset($_COOKIE['Contacto'])) {

    $datos = json_decode($_COOKIE['Contacto']);
    $nombre = $datos->nombre;
    $email2 = $datos->email;
    $asunto = $datos->asunto;
    $mensaje = $datos->mensaje;

    $mj = new \Mailjet\Client('9bd175aba2ace49ece58030b6ada6053', '1292e1ece0cc2c36b9a99fc0494875aa', true, ['version' => 'v3.1']);
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "info@tuscomprasonline.com.ar",
                    'Name' => "tutiendaonline"
                ],
                'To' => [
                    [
                        'Email' => "info@tuscomprasonline.com.ar",
                        'Name' => "tutiendaonline"
                    ]
                ],
                'Subject' => "Solicitud de Contacto",
                'TextPart' => "Contacto",
                'HTMLPart' => "<h4>Datos del cliente:</h4>
        <ul><li>Nombre: <b>" . $nombre . "</b> </li><li>Email: <b>" . $email2 . "</b> </li></ul> <br />
        <p> <span style='color: #000'>Mensaje</span>: <br /> " . $mensaje . " </p>
        <br />Contacto desde el sitio web de TUSCOMPRASONLINE.COM.AR",
                'Headers' => [
                    'Reply-To' => $email2
                ]
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();

    echo '<script> document.cookie = "Contacto=; expires=Thu, 01 Jan 1970 00:00:00 UTC;"; </script>';
}


?>
<!DOCTYPE html>
<html lang="es">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>www.tuscomprasonline.com.ar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="views/images/logo.png">
    <link rel="apple-touch-icon" href="views/images/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="views/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="views/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="views/css/custom.css">

    <script src="https://kit.fontawesome.com/76e0757c77.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("user_1Bx65VsUxTfS7qsjis90t");
        })();
    </script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=5491139441625&text=Hola!%20Quiero%20más%20información.%20Gracias!" id="contact-whatsapp"><img src="views/images/whatsapp.svg" alt="Whatsapp" /></a>

    <?php include 'pages/modules/header.php' ?>

    <?php

    if (isset($_GET["pagina"])) {

        if ($_GET["pagina"] == "index") {

            include "pages/home.php";
        } else if ($_GET["pagina"] == "contacto") {

            include "pages/contacto.php";
        } else if ($_GET["pagina"] == "categorias") {

            include "pages/categorias.php";
        } else if ($_GET["pagina"] == "item") {

            include "pages/item.php";
        } else if ($_GET["pagina"] == "formulario") {

            include "pages/formulario.php";
        } else {
            include "pages/page-404.php";
        }
    } else {
        include "pages/home.php";
    }
    ?>


    <?php include 'pages/modules/footer.php'; ?>

    <!-- <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a> -->

    <!-- ALL JS FILES -->
    <script src="views/js/jquery-3.2.1.min.js"></script>
    <script src="views/js/popper.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="views/js/jquery.superslides.min.js"></script>
    <script src="views/js/bootstrap-select.js"></script>
    <script src="views/js/inewsticker.js"></script>
    <script src="views/js/bootsnav.js."></script>
    <script src="views/js/images-loded.min.js"></script>
    <script src="views/js/isotope.min.js"></script>
    <script src="views/js/owl.carousel.min.js"></script>
    <script src="views/js/baguetteBox.min.js"></script>
    <script src="views/js/form-validator.min.js"></script>
    <script src="views/js/contact-form-script.js"></script>
    <script src="views/js/custom.js"></script>
    <script src="views/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('a[href^="#recomendado"]').click(function() {
                var destino = $(this.hash);
                if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                }
                if (destino.length == 0) {
                    destino = $('html');
                }
                $('html, body').animate({
                    scrollTop: destino.offset().top
                }, 500);
                return false;
            });
        });
    </script>

</body>

</html>