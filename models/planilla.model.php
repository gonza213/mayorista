<?php


require_once 'conexion.php';

class ModelPlanilla{

    static public function mdlMostrarPlanilla($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}