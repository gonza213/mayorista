<?php

require_once '../../controllers/productos.controller.php';

require_once '../../models/productos.models.php';


class Ajax{

    public $obtenerProducto;

    public function ajaxProducto()
    {
        $item = "id_p";
        $valor = $this->obtenerProducto;
        $respuesta = ControllerProductos::ctrObtenerProducto($item, $valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["obtenerProducto"])) {
    $c = new Ajax();
    $c->obtenerProducto = $_POST["obtenerProducto"];
    $c->ajaxProducto();
}
