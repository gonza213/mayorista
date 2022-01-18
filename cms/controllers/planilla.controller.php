<?php


class ControllerPlanilla
{

    static public function ctrEditarPlanilla()
    {
        if (isset($_POST["id"])) {


            $location = "";


            if ($_FILES['archivo']['name']) {
                $name = $_FILES['archivo']['name'];
                $fuente = $_FILES["archivo"]['tmp_name'];
                $newFilename = time() . "_" . $name;
                move_uploaded_file($fuente, 'views/images/planilla/' . $newFilename);
                $location = 'views/images/planilla/' . $newFilename;
            }

            $tabla = "planilla";

            $datos = array(
                "id" => $_POST['id'],
                "archivo" => $location
            );

            $respuesta = ModelPlanilla::mdlEditarPlanilla($tabla, $datos);



            if ($respuesta == "ok") {

                echo "<script>
              
                        Swal.fire({
                          icon: 'success',
                          title: '¡El archivo se ha actualizado correctamente!',
                          showConfirmButton: true,
                          confirmButtonText: 'Cerrar',
                          closeOnConfirm: false
                          }).then((result)=>{
                  
                          if(result.value){
                  
                              window.location = 'planilla';
                          }
                      })
                                
                        
                             </script>";
            }
        }
    }

    static public function ctrMostrarPlanilla(){

        $tabla = 'planilla';

        $respuesta = ModelPlanilla::mdlMostrarPlanilla($tabla);

        return $respuesta;
    }
}
