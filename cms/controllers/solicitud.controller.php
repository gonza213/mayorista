<?php

class ControllerSolicitud
{



    //Borrar admin
    static public function ctrBorrarSolicitud()
    {

        if (isset($_GET["idBorrarCotizar"])) {

            $tabla = "solicitud";
            $datos = $_GET["idBorrarCotizar"];

            $respuesta = ModelSolicitud::mdlBorrarSolicitud($tabla, $datos);

            if ($respuesta == "ok") {

                echo "<script>
            
                  Swal.fire({
                    icon: 'success',
                    title: '¡La cotización ha sido borrado exitosamente!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar',
                    closeOnConfirm: false
                }).then((result)=>{
            
                    if(result.value){
            
                        window.location = 'cotizaciones';
                    }
                })
                          
                  
                       </script>";
            }
        }
    }

    // MOSTRAR Usuario
    static public function ctrMostrarSolicitudes()
    {

        $tabla = "solicitud";

        $resultado = ModelSolicitud::mdlMostrarSolicitudes($tabla);

        return $resultado;
    }

}
