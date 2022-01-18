<?php

require_once 'controllers/plantilla.controller.php'; 
require_once 'controllers/usuarios.controller.php';
require_once 'controllers/categorias.controller.php';
require_once 'controllers/productos.controller.php';
require_once 'controllers/planilla.controller.php';
require_once 'controllers/solicitud.controller.php';
require_once 'controllers/contactos.controller.php';

require_once 'models/usuarios.model.php';
require_once 'models/categorias.models.php';
require_once 'models/productos.models.php';
require_once 'models/planilla.models.php';
require_once 'models/solicitud.model.php';
require_once 'models/contactos.models.php';


$plantilla = new Plantilla();
$plantilla -> ctrMostrarPlantilla();