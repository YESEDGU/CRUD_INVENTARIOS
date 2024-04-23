<?php

require_once "mainModel.php";

class usuarioModelo extends mainModel
{

    /* ----- Modelo Agregar Usuario -----*/

    protected static function agregar_usuario_modelo($datos)
    {

        $sql = mainModel::conectar()->prepare("INSERT INTO tb_usuarios(tip_docu,num_docu,nomb_usua,apell_usa,dire_usua,tel_usua, 	email_usua,user_usua,pass_usua,id_privi,id_est) VALUES(:Tipodocu,:Documnum,:Nombre,:Apellido,:Direccion,:Telefono,:Email,:Usuario,:Clave,:Privilegio,:Estado)");

        $sql->bindParam(":Tipodocu", $datos['Tipodocu']);
        $sql->bindParam(":Documnum", $datos['Documnum']);
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Apellido", $datos['Apellido']);
        $sql->bindParam(":Direccion", $datos['Direccion']);
        $sql->bindParam(":Telefono", $datos['Telefono']);
        $sql->bindParam(":Email", $datos['Email']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        $sql->bindParam(":Clave", $datos['Clave']);
        $sql->bindParam(":Privilegio", $datos['Privilegio']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->execute();

        return $sql;
    }
}
