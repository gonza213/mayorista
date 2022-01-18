<?php

require_once '../../controllers/usuarios.controller.php';
// require_once '../../controllers/contactos.controller.php';
require_once '../../models/usuarios.model.php';
// require_once '../../models/contacto.model.php';

class Ajax
{
    //Editar usuario
    public $idEditarUsuario;

    public function ajaxEditUsuario()
    {
        $item = "id";
        $valor = $this->idEditarUsuario;
        $respuesta = ControllerUsuario::ctrVerUsuario($item, $valor);

        echo json_encode($respuesta);
    }

    //Validar usuario
    public $validarUsuario;

    public function ajaxValidarUsuario(){

        $item = "usuario";
        $valor = $this->validarUsuario;
        $respuesta = ControllerUsuario::ctrVerUsuario($item, $valor);

        echo json_encode($respuesta);
    }

    // //Mensaje
    // public $idMensaje;

    // public function ajaxMensaje()
    // {
    //     $item = "id";
    //     $valor = $this->idMensaje;
    //     $respuesta = ControllerContacto::ctrVerMensaje($item, $valor);

    //     echo json_encode($respuesta);
    // }
}

//Editar usuario
if (isset($_POST["idEditarUsuario"])) {
    $c = new Ajax();
    $c->idEditarUsuario = $_POST["idEditarUsuario"];
    $c->ajaxEditUsuario();
}

//Validar usuario
if(isset($_POST["validarUsuario"])){
    $d = new Ajax();
    $d->validarUsuario = $_POST["validarUsuario"];
    $d -> ajaxValidarUsuario();
}

//Mensaje
// if (isset($_POST["idMensaje"])) {
//     $c = new Ajax();
//     $c->idMensaje = $_POST["idMensaje"];
//     $c->ajaxMensaje();
// }