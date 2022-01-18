<?php

require_once "conexion.php";


class ModelPlanilla
{

    static public function mdlEditarPlanilla($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET archivo = :archivo  WHERE id = :id");

        $stmt->bindParam(":archivo", $datos["archivo"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlMostrarPlanilla($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        return $stmt->fetchAll();


        $stmt->close();

        $stmt = null;
    }
}
