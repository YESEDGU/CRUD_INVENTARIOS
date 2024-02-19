<?php

    class viewsModel{

        /*----------------- Modelo Obtner las Vistas ----------------- */

        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=[];
            if(in_array($vistas, haystack)){

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

