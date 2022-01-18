<?php

class ControllerCategorias{

    static public function ctrMostrarCategorias(){

        $tabla = 'categorias';

        $respuesta = ModelCategorias::mdlMostrarCategorias($tabla);

        return $respuesta;
    }
}