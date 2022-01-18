<?php


class ControllerCategoria{

    static public function ctrCrearCategoria(){

        
        if (isset($_POST["categoria"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["categoria"])) {

                $tabla = 'categorias';

                $datos = array(
                    'categoria' => $_POST["categoria"]
                );

                $respuesta = ModelCategoria::mdlCraerCategoria($tabla, $datos);

                if ($respuesta == "ok") {

                    echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡La categoria se ha creado correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'categorias';
                          }
                      })
                                
                        
                             </script>";
                }

            }else{

                
                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡La categoría no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'categorias';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }

    static public function ctrMostrarCategorias(){

        $tabla = 'categorias';

        $respuesta = ModelCategoria::mdlMostrarCategorias($tabla);

        return $respuesta;
    }

       //Borrar 
       static public function ctrBorrarCategoria()
       {
   
           if (isset($_GET["idBorrarCategoria"])) {
   
               $tabla = "categorias";
               $datos = $_GET["idBorrarCategoria"];
   
               $respuesta = ModelCategoria::mdlBorrarCategoria($tabla, $datos);
   
               if ($respuesta == "ok") {
   
                   echo "<script>
               
                     Swal.fire({
                       icon: 'success',
                       title: '¡La categoría ha sido borrado exitosamente!',
                       showConfirmButton: true,
                       confirmButtonText: 'Cerrar',
                       closeOnConfirm: false
                   }).then((result)=>{
               
                       if(result.value){
               
                           window.location = 'categorias';
                       }
                   })
                             
                     
                          </script>";
               }
           }
       }
   
}