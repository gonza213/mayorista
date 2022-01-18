<?php


require_once 'conexion.php';


class ModelCategorias
{

    static public function mdlMostrarCategorias($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla ORDER BY categoria ASC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}
