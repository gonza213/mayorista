<?php

require_once 'conexion.php';


class ModelSolicitud{

    static public function mdlEnviarSolicitud($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, tel, dni, domicilio, ciudad, provincia, lista, total, operacion) VALUES (:nombre, :email, :tel, :dni, :domicilio, :ciudad, :provincia, :lista, :total, :operacion)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":tel", $datos["tel"], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $datos["dni"], PDO::PARAM_STR);
        $stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":provincia", $datos["provincia"], PDO::PARAM_STR);
        $stmt->bindParam(":lista", $datos["lista"], PDO::PARAM_STR);
        $stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
        $stmt->bindParam(":operacion", $datos["operacion"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlEnviarContacto($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, asunto, mensaje) VALUES (:nombre, :email, :asunto, :mensaje)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto", $datos["asunto"], PDO::PARAM_STR);
        $stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);
    

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlEnviarSuscripcion($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email) VALUES (:nombre, :email)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }
}