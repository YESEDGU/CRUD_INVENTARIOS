<?php

    class viewsModel{

        /*----------------- Modelo Obtner las Vistas ----------------- */

        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=["home","prove-list","prove-new","prove-search"];
            if(in_array($vistas, $listaBlanca)){

                if(is_file("./view/contenidos/".$vistas."-view.php")){
                    $contenido="./view/contenidos/".$vistas."-view.php";
                }else{

                }
            }elseif($vistas=="login" || $vistas=="index"){
                $contenido="login";

            }else{
                $contenido="404";
            }
            return  $contenido;
        }

    }

