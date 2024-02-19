<?php
    require_once "./config/APP.php";
    require_once "./controller/viewsController.php";

    $plantilla = new viewsContoller();
    $plantilla->obtener_plantilla_controlador();
