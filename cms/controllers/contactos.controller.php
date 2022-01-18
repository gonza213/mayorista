<?php

class ControllerContacto
{



    //Borrar admin
    static public function ctrBorrarContacto()
    {

        if (isset($_GET["idBorrarContacto"])) {

            $tabla = "contacto";
            $datos = $_GET["idBorrarContacto"];

            $respuesta = ModelContacto::mdlBorrarContacto($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡El contacto ha sido borrado exitosamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'contactos';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // MOSTRAR Usuario
    static public function ctrMostrarContactos()
    {

        $tabla = "contacto";

        $resultado = ModelContacto::mdlMostrarContactos($tabla);

        return $resultado;
    }

     //Borrar admin
     static public function ctrBorrarSuscriptor()
     {
 
         if (isset($_GET["idBorrarSuscriptor"])) {
 
             $tabla = "suscripciones";
             $datos = $_GET["idBorrarSuscriptor"];
 
             $respuesta = ModelContacto::mdlBorrarSuscriptor($tabla, $datos);
 
             if ($respuesta == "ok") {
 
                 echo "<script>
             
                   Swal.fire({
                     icon: 'success',
                     title: '¡El suscriptor ha sido borrado exitosamente!',
                     showConfirmButton: true,
                     confirmButtonText: 'Cerrar',
                     closeOnConfirm: false
                 }).then((result)=>{
             
                     if(result.value){
             
                         window.location = 'suscriptores';
                     }
                 })
                           
                   
                        </script>";
             }
         }
     }
 
     // MOSTRAR Usuario
     static public function ctrMostrarSuscriptores()
     {
 
         $tabla = "suscripciones";
 
         $resultado = ModelContacto::mdlMostrarContactos($tabla);
 
         return $resultado;
     }

}
