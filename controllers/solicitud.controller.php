<?php


class ControllerSolictud{

    static public function ctrEnviarSolicitud(){

         
        if (isset($_POST["nombre"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["operacion"])) {

                $tabla = 'solicitud';

                $datos = array(
                    'nombre' => $_POST["nombre"],
                    'email' => $_POST["email"],
                    'tel' => $_POST["tel"],
                    'dni' => $_POST["dni"],
                    'domicilio' => $_POST["domicilio"],
                    'ciudad' => $_POST["ciudad"],
                    'provincia' => $_POST["provincia"],
                    'lista' => $_POST["lista"],
                    'total' => $_POST["total"],
                    'operacion' => $_POST["operacion"]
                );

                $respuesta = ModelSolicitud::mdlEnviarSolicitud($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡Se envió la cotización correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'index';
                          }
                      })
                                
                        
                             </script>";
                }

            }else{

                
                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡La cotización no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'index';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }


    static public function ctrEnviarContacto(){

         
        if (isset($_POST["nombre"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["idC"])) {

                $tabla = 'contacto';

                $datos = array(
                    'nombre' => $_POST["nombre"],
                    'email' => $_POST["email"],
                    'asunto' => $_POST["asunto"],
                    'mensaje' => $_POST["mensaje"],
                );

                $respuesta = ModelSolicitud::mdlEnviarContacto($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡Se envió el mensaje correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'contacto';
                          }
                      })
                                
                        
                             </script>";
                }

            }else{

                
                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡El mensaje no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'contacto';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }

    static public function ctrEnviarSuscripcion(){

         
        if (isset($_POST["email2"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["nombre2"])) {

                $tabla = 'suscripciones';

                $datos = array(
                    'nombre' => $_POST["nombre2"],
                    'email' => $_POST["email2"]
                );

                $respuesta = ModelSolicitud::mdlEnviarSuscripcion($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
                    
                            Swal.fire(
                                '¡Te has suscripto exitosamente!',
                                'Haga click en OK para continuar',
                                'success'
                            )
                        
                          </script>";
                }

            }else{

                
                echo "<script>
                    
                        Swal.fire(
                            '¡Hubo un error al suscribirse!',
                            'Haga click en OK para continuar',
                            'warning'
                        )
                            
                        </script>";
            }
        }
    }
}
