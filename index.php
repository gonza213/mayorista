<?php

require_once 'controllers/plantilla.controller.php';
require_once 'controllers/categorias.controller.php';
require_once 'controllers/productos.controller.php';
require_once 'controllers/solicitud.controller.php';
require_once 'controllers/planilla.controller.php';


require_once 'models/categorias.models.php';
require_once 'models/productos.models.php';
require_once 'models/solicitud.models.php';
require_once 'models/planilla.model.php';

require_once 'extensiones/vendor/autoload.php';


$plantilla = new Plantilla();
$plantilla -> ctrMostrarPlantilla();