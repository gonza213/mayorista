<?php

session_start();


//Comprobamos si esta definida la sesión 'tiempo'.
if (isset($_SESSION['tiempo'])) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 1200; //20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

    //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
    if ($vida_session > $inactivo) {


        //Removemos sesión.
        session_unset();
        //Destruimos sesión.
        session_destroy();
        //Redirigimos pagina.

        header("Location: login");

        exit();
    }
}
$_SESSION['tiempo'] = time();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>CMS - Tus Compras Online</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="views/images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="views/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="views/images/logo.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="views/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="views/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="views/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="views/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="views/vendors/styles/style.css">
    <!-- SWEET ALERT2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- include summernote css/js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" integrity="sha512-KbfxGgOkkFXdpDCVkrlTYYNXbF2TwlCecJjq1gK5B+BYwVk7DGbpYi4d4+Vulz9h+1wgzJMWqnyHQ+RDAlp8Dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

</head>

<body>

    <?php if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") : ?>

        <?php

        include 'pages/modules/header.php';
        include 'pages/modules/sidebar.php';

        ?>

        <?php

        if (isset($_GET["pagina"])) {

            if ($_GET["pagina"] == "home") {

                include "pages/home.php";
            } else if ($_GET["pagina"] == "usuarios") {

                include "pages/usuarios.php";
            } else if ($_GET["pagina"] == "categorias") {

                include "pages/categorias.php";
            } else if ($_GET["pagina"] == "productos") {

                include "pages/productos.php";
            } else if ($_GET["pagina"] == "planilla") {

                include "pages/planilla.php";
            } else if ($_GET["pagina"] == "cotizaciones") {

                include "pages/cotizaciones.php";
            } else if ($_GET["pagina"] == "contactos") {

                include "pages/contactos.php";
            } else if ($_GET["pagina"] == "suscriptores") {

                include "pages/suscriptores.php";
            } else if ($_GET["pagina"] == "ver-producto") {

                include "pages/ver-producto.php";
            } else if ($_GET["pagina"] == "editar-producto") {

                include "pages/editar-producto.php";
            } else if ($_GET["pagina"] == "mi-perfil") {

                include "pages/perfil.php";
            } else if ($_GET["pagina"] == "salir") {

                include "pages/modules/salir.php";
            } else {
                include 'pages/page-404.php';
            }
        } else {
            include "pages/home.php";
        }

        ?>


    <?php else : ?>

        <?php include "pages/login.php"; ?>

    <?php endif; ?>
    <!-- js -->
    <script src="views/vendors/scripts/core.js"></script>
    <script src="views/vendors/scripts/script.min.js"></script>
    <script src="views/vendors/scripts/process.js"></script>
    <script src="views/vendors/scripts/layout-settings.js"></script>
    <script src="views/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="views/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="views/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="views/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="views/vendors/scripts/dashboard.js"></script>
    <script src="views/src/scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js" integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<script>
    $('#example').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        scrollCollapse: true,
        responsive: true,
        autoWidth: false,
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }]
    });
</script>
<script>
    $('#example2').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        scrollCollapse: true,
        responsive: true,
        autoWidth: false,
        bFilter: false,
        columnDefs: [{
            targets: "datatable-nosort",
            orderable: false,
        }]
    });
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#summernote2').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>

</html>