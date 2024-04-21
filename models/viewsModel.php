<?php

    class viewsModel{

        /*----------------- Modelo Obtner las Vistas ----------------- */

        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=["home","prove-list","prove-new","prove-search","prove-update","user-new","user-list","user-search","user-update","prod-list","prod-new","prod-update","prod-search","ord-new","inbod-list","ord-update","salidas","devoluciones","ord-search"];
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

