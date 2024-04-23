<?php

if ($peticionAjax) {
    require_once "../models/usuarioModelo.php";
} else {
    require_once "../models/usuarioModelo.php";
}

class usuarioControlador extends usuarioModelo
{

    /* ----- Controlador Agregar Usuario -----*/
    public function agregar_usuario_controlador()
    {
        $numdoc = mainModel::limpiar_cadena($_POST['usuario_dni_reg']);
        $tipdoc = mainModel::limpiar_cadena($_POST['usuario_tipo_documento_reg']);
        $nombre = mainModel::limpiar_cadena($_POST['usuario_nombre_reg']);
        $apellido = mainModel::limpiar_cadena($_POST['usuario_apellido_reg']);
        $direccion = mainModel::limpiar_cadena($_POST['usuario_direccion_reg']);
        $telefono = mainModel::limpiar_cadena($_POST['usuario_telefono_reg']);

        $usuario = mainModel::limpiar_cadena($_POST['usuario_usuario_reg']);
        $email = mainModel::limpiar_cadena($_POST['usuario_email_reg']);
        $clave1 = mainModel::limpiar_cadena($_POST['usuario_clave_1_reg']);
        $clave2 = mainModel::limpiar_cadena($_POST['usuario_clave_2_reg']);

        $privilegio = mainModel::limpiar_cadena($_POST['usuario_privilegio_reg']);

        /*=== Comprobar campos vacios ====*/

        if ($numdoc == "" || $nombre == "" || $apellido == "" || $usuario == "" || $clave1 == "" || $clave2 == "") {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "No se han completado todos los campos obligatorios",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        /*=== Verificando integridad de los datos ====

        if (mainMOdel::verificar_datos("[0-9-]{10,20}", $numdoc)) {

            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "El numero de documento no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (mainMOdel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,35}", $nombre)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "Los nombres no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (mainMOdel::verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}", $apellido)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "Los apellidos no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if ($direccion != "") {
            if (mainMOdel::verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}", $direccion)) {
                $alerta = [
                    "Alerta" => "simple",
                    "Titulo" => "Ocurrio un Error Inesperado",
                    "Texto" => "La direccion no coincide con el formato solicitado",
                    "Tipo" => "error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }

        if ($telefono != "") {

            if (mainMOdel::verificar_datos("[0-9()+]{8,20}", $telefono)) {
                $alerta = [
                    "Alerta" => "simple",
                    "Titulo" => "Ocurrio un Error Inesperado",
                    "Texto" => "El telefono no coincide con el formato solicitado",
                    "Tipo" => "error"
                ];

                echo json_encode($alerta);
                exit();
            }
        }


        if (mainMOdel::verificar_datos("[a-zA-Z0-9]{6,35}", $usuario)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "La Cuenta de Usuario no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if (mainMOdel::verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave1) || mainMOdel::verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave2)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "La Contraseña no coincide con el formato solicitado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }*/

        /*=== Comprobando Numero de Documento ===*/

        $check_documento = mainModel::ejecutar_consulta_simple("SELECT num_docu FROM tb_usuarios WHERE num_docu= '$numdoc'");

        if ($check_documento->rowCount() > 0) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "El documento ya se encuentra registrado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }


        /*=== Comprobando la cuenta de usuario ===*/

        $check_user = mainModel::ejecutar_consulta_simple("SELECT user_usua FROM tb_usuarios WHERE nuser_usua = '$usuario'");

        if ($check_user->rowCount() > 0) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "La cuenta de usuario ya se encuentra registrado",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /*=== Comprobando email ===*/

        if ($email != "") {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $check_email = mainModel::ejecutar_consulta_simple("SELECT email_usua FROM tb_usuarios WHERE email_usua= '$email'");

                if ($check_email->rowCount() > 0) {
                    $alerta = [
                        "Alerta" => "simple",
                        "Titulo" => "Ocurrio un Error Inesperado",
                        "Texto" => "La cuenta de correo ya se encuentra registrado",
                        "Tipo" => "error"
                    ];
                    echo json_encode($alerta);
                    exit();
                } else {
                    $alerta = [
                        "Alerta" => "simple",
                        "Titulo" => "Ocurrio un Error Inesperado",
                        "Texto" => "La cuenta de correo no es valida",
                        "Tipo" => "error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
            }
        }

        /*== Comprobar Contraseñas ==*/

        if ($clave1 != $clave2) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "Las contraseñas no son iguales",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        } else {
            $clave = mainModel::encryption($clave1);
        }

        /*== Comprobando Privilegios ==*/

        if ($privilegio < 1 || $privilegio > 3) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "La Opcion no es valida",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /*== Comprobando tipo documento ==*/

        if ($tipdoc < 1 || $tipdoc > 2) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "La Opcion no es valida",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        $datos_usuario_reg = [

            "Documnum" => $numdoc,
            "Tipodocu" => $tipdoc,
            "Nombre" => $nombre,
            "Apellido" => $apellido,
            "Direccion" => $direccion,
            "Telefono" => $telefono,
            "Email" => $email,
            "Usuario" => $usuario,
            "Contraseña" => $clave,
            "Estado" => "Activo",
            "Privilegio" => $privilegio

        ];

        $agregar_usuario = usuarioModelo::agregar_usuario_modelo($datos_usuario_reg);

        if ($agregar_usuario->rowCount() == 1) {
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Usuario Registrado",
                "Texto" => "Usuario Creado",
                "Tipo" => "success"
            ];
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un Error Inesperado",
                "Texto" => "No se puedo crear el usuario",
                "Tipo" => "error"
            ];
        }

        echo json_encode($alerta);
    }
}
