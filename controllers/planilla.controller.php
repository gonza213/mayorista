<?php

class ControllerPlanilla{

    static public function ctrMostrarPlanilla(){

        $tabla = 'planilla';

        $respuesta = ModelPlanilla::mdlMostrarPlanilla($tabla);

        return $respuesta;
    }
}