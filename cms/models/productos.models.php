<?php

require_once "conexion.php";


class ModelProductos
{


    // Mostrar Admin
    static public function mdlMostrarProductos($tabla1, $tabla2)
    {

        $stmt = Conexion::conectar()->prepare("SELECT $tabla1.*, DATE_FORMAT(fecha_p, '%d/%m/%y') AS fecha_p, $tabla2.* FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id_categoria = $tabla2.id ORDER BY id_p DESC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    // Crear Admin
    static public function mdlCrearProducto($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, id_categoria, descripcion, info, precio, stock, recomendar, imagen) VALUES (:nombre, :id_categoria, :descripcion, :info, :precio, :stock, :recomendar, :imagen)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":info", $datos["info"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
        $stmt->bindParam(":recomendar", $datos["recomendar"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);



        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    // EDITAR USUARIO
    static public function mdlEditarProducto($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, id_categoria = :id_categoria, precio = :precio, stock = :stock, info = :info, descripcion = :descripcion, recomendar = :recomendar, imagen = :imagen  WHERE id_p = :id_p");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
        $stmt->bindParam(":info", $datos["info"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":recomendar", $datos["recomendar"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $stmt->bindParam(":id_p", $datos["id_p"], PDO::PARAM_INT);


        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    //Borrar
    static public function mdlBorrarProducto($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_p = :id_p");

        $stmt->bindParam(":id_p", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();

        $stmt = null;
    }

    
    // MOSTRAR Admin
    static public function mdlVerAdmin($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;
    }


      // Crear Admin
      static public function mdlSubirImagenes($tabla, $datos)
      {
  
          $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_producto, imagenes) VALUES (:id_producto, :imagenes)");
  
          $stmt->bindParam(":id_producto", $datos["id_producto"], PDO::PARAM_STR);
          $stmt->bindParam(":imagenes", $datos["imagenes"], PDO::PARAM_STR);
     
  
  
  
          if ($stmt->execute()) {
  
              return "ok";
          } else {
  
              return "error";
          }
  
          $stmt->close();
  
          $stmt = null;
      }

          // Mostrar Admin
    static public function mdlMostrarImagenes($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  ORDER BY id DESC");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

       //Borrar
       static public function mdlBorrarImagen($tabla, $datos)
       {
           $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
   
           $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

           if ($stmt->execute()) {
   
               return "ok";
           } else {
   
               return "error";
           }
   
           $stmt->close();
   
           $stmt = null;
       }

}