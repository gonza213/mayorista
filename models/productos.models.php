<?php


require_once 'conexion.php';


class ModelProductos{

     static public function mdlMostrarProductos($tabla1, $tabla2){

      $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, DATE_FORMAT(fecha_p, '%d/%m/%y') AS fecha_p, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id ORDER BY id_p DESC");

      $stmt->execute();

      return $stmt->fetchAll();

      $stmt->close();

      $stmt = null;

     }

     static public function mdlObtenerProducto($tabla, $item, $valor)
     {
         $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
         $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
 
         $stmt->execute();
 
         return $stmt->fetch();
 
         $stmt->close();
 
         $stmt = null;
     }

     static public function mdlMostrarImagenes($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') AS fecha FROM $tabla ORDER BY id DESC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;

     }
}