<?php

class ControllerProductos
{

    static public function ctrMostrarProductos()
    {

        $tabla1 = 'productos';
        $tabla2 = 'categorias';

        $respuesta = ModelProductos::mdlMostrarProductos($tabla1, $tabla2);

        return $respuesta;
    }

    // REGISTRAR ADMIN
    static public function ctrCrearProducto()
    {

        if (isset($_POST["nombre"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_categoria"])) {

                $ruta = "";

                if ($_FILES["imagen"]["tmp_name"] == "") {

                    $ruta = "views/src/images/imagen-neutral.png";
                } else {

                    if (isset($_FILES["imagen"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["imagen"]["tmp_name"]);

                        // $nuevoancho = 400;
                        // $nuevoalto = 400;



                        if ($_FILES["imagen"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(1000, 9999);

                            $ruta = "views/images/productos/" .  $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["imagen"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "views/images/productos/" .  $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagepng($destino, $ruta);
                        } else {

                            echo "<script>
                  
                                Swal.fire({
                                  icon: 'error',
                                  title: '¡La imagen debe ser formato JPG o PNG!',
                                  showConfirmButton: true,
                                  confirmButtonText: 'Cerrar',
                                  closeOnConfirm: false
                                  }).then((result)=>{
                          
                                  if(result.value){
                          
                                      window.location = 'productos';
                                  }
                              })
                                        
                                
                                     </script>";
                        }
                    }
                }


                $tabla = "productos";


                $datos = array(
                    "nombre" => $_POST["nombre"],
                    "id_categoria" => $_POST["id_categoria"],
                    "precio" => $_POST["precio"],
                    "stock" => $_POST["stock"],
                    "info" => $_POST["info"],
                    "descripcion" => $_POST["descripcion"],
                    "recomendar" => $_POST["recomendar"],
                    "imagen" => $ruta
                );

                $respuesta = ModelProductos::mdlCrearProducto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡El producto se ha creado correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'productos';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡El producto no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'productos';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }


    // EDITAR ADMIN
    static public function ctrEditarProducto()
    {

        if (isset($_POST["nombre"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_categoria"])) {

                $ruta = "";

                if ($_FILES["imagen"]["tmp_name"] == "") {

                    $ruta = $_POST["imagenActual"];
                } else {

                    if (isset($_FILES["imagen"]["tmp_name"])) {


                        list($ancho, $alto) = getimagesize($_FILES["imagen"]["tmp_name"]);

                        // $nuevoancho = 400;
                        // $nuevoalto = 400;




                        if ($_FILES["imagen"]["type"] == "image/jpeg") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "views/images/productos/" . $aleatorio . ".jpg";

                            $origen = imagecreatefromjpeg($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagejpeg($destino, $ruta);
                        } else if ($_FILES["imagen"]["type"] == "image/png") {

                            $aleatorio = mt_rand(100, 999);

                            $ruta = "views/images/productos/" . $aleatorio . ".png";

                            $origen = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);

                            $destino = imagecreatetruecolor($ancho, $alto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0,  $ancho, $alto, $ancho, $alto);

                            imagepng($destino, $ruta);
                        } else {

                            echo "<script>
                  
                                Swal.fire({
                                  icon: 'error',
                                  title: '¡La imagen debe ser formato JPG o PNG!',
                                  showConfirmButton: true,
                                  confirmButtonText: 'Cerrar',
                                  closeOnConfirm: false
                                  }).then((result)=>{
                          
                                  if(result.value){
                          
                                      window.location = 'index.php?pagina=editar-producto&id=" . $_GET["id"] . "';
                                  }
                              })
                                        
                                
                                     </script>";
                        }
                    }
                }


                $tabla = "productos";




                $datos = array(
                    "id_p" => $_POST["id_p"],
                    "nombre" => $_POST["nombre"],
                    "id_categoria" => $_POST["id_categoria"],
                    "precio" => $_POST["precio"],
                    "stock" => $_POST["stock"],
                    "info" => $_POST["info"],
                    "descripcion" => $_POST["descripcion"],
                    "recomendar" => $_POST["recomendar"],
                    "imagen" => $ruta
                );

                $respuesta = ModelProductos::mdlEditarProducto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡El producto se ha actualizado correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                            window.location = 'index.php?pagina=editar-producto&id=" . $_GET["id"] . "';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡El producto no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                        window.location = 'index.php?pagina=editar-producto&id=" . $_GET["id"] . "';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }


    //Borrar admin
    static public function ctrBorrarProducto()
    {

        if (isset($_GET["idBorrarProducto"])) {

            $tabla = "productos";
            $datos = $_GET["idBorrarProducto"];

            $respuesta = ModelProductos::mdlBorrarProducto($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡El producto ha sido borrado exitosamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'productos';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // MOSTRAR Usuario
    static public function ctrVerUsuario($item, $valor)
    {

        $tabla = "usuarios";

        $resultado = ModelAdministrador::mdlVerAdmin($tabla, $item, $valor);

        return $resultado;
    }

    static public function ctrSubirImagenes()
    {
        if (isset($_POST["id_producto"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["id_producto"])) {

                $location = "";

                foreach ($_FILES["imagenes"]['tmp_name'] as $key => $tmp_name) {


                    if ($_FILES['imagenes']['name'][$key]) {
                        $name = $_FILES['imagenes']['name'][$key];
                        $fuente = $_FILES["imagenes"]['tmp_name'][$key];
                        $newFilename = time() . "_" . $_POST["id_producto"] . "_" . $name;
                        move_uploaded_file($fuente, 'views/images/productos/imagenes/' . $newFilename);
                        $location = 'views/images/productos/imagenes/' . $newFilename;
                    }

                    $tabla = "imagenes";

                    $datos = array(
                        "id_producto" => $_POST["id_producto"],
                        "imagenes" => $location,
                    );

                    $respuesta = ModelProductos::mdlSubirImagenes($tabla, $datos);
                }


                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡Las imagenes se han cargado correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'index.php?pagina=ver-producto&id=" . $_POST["id_producto"] . "';
                          }
                      })
                                
                        
                             </script>";
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡La imagen no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'index.php?pagina=ver-producto&id=" . $_POST["id_producto"] . "';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }


    static public function ctrMostrarImagenes()
    {

        $tabla = 'imagenes';

        $respuesta = ModelProductos::mdlMostrarImagenes($tabla);

        return $respuesta;
    }


       //Borrar admin
       static public function ctrBorrarImagen()
       {
   
           if (isset($_GET["idBorrarImagen"])) {
   
               $tabla = "imagenes";
               $datos = $_GET["idBorrarImagen"];
               $get = $_GET["id"];
   
               $respuesta = ModelProductos::mdlBorrarImagen($tabla, $datos);
   
               if ($respuesta == "ok") {
   
                   echo "<script>
               
                     Swal.fire({
                       icon: 'success',
                       title: '¡La imagen ha sido borrado exitosamente!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                   }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'index.php?pagina=ver-producto&id=" . $get . "';
                       }
                   })
                             
                     
                          </script>";
               }
           }
       }
}
