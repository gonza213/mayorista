<?php


class ControllerProductos{

    static public function ctrMostrarProductos(){

        $tabla1 = 'productos';
        $tabla2 = 'categorias';

        $respuesta = ModelProductos::mdlMostrarProductos($tabla1, $tabla2);

        return $respuesta;
    }

    static public function ctrObtenerProducto($item, $valor)
    {

        $tabla = "productos";

        $resultado = ModelProductos::mdlObtenerProducto($tabla, $item, $valor);

        return $resultado;
    }


    static public function ctrMostrarImagenes(){

        $tabla = 'imagenes';

        $respuesta = ModelProductos::mdlMostrarImagenes($tabla);

        return $respuesta;
    }
}