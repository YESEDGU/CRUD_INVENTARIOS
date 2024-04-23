<?php

$peticionAjax = true;

require_once "../config/APP.php";

if (isset($_POST['usuario_dni_reg'])) {
    /* ----- Instancia al Controlador -----*/

    require_once "../controler/usuarioControlador.php";
    $ins_usuario = new usuarioControlador();

    /* ----- Registrar Usuario-----*/

    if (isset($_POST['usuario_dni_reg']) && isset($_POST['usuario_tipo_documento_reg'])) {
        echo  $ins_usuario->agregar_usuario_controlador();
    }
} else {
    session_start(['name' => 'CI']);
    session_unset();
    session_destroy();
    header("Location: " . SERVERURL . "login/");
    exit();
}
