<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
    <?php include "./view/inc/Link.php"; ?>
</head>
<body>
	<?php
		$peticonAjax=false;
		require_once "./controller/viewsController.php";
		$IV = new viewsContoller();

		$vistas=$IV->obtener_vistas_controlador();

		if($vistas=="login" || $vistas=="404"){

			require_once "./view/contenidos/".$vistas."-view.php";
		}else{


	?>
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
	    <?php include "./view/inc/NavLateral.php"; ?>

		<!-- Page content -->
		<section class="full-box page-content">
            <?php include "./view/inc/NavBar.php"; ?>
		</section>
	</main>
    <?php 
		}
		include "./view/inc/Script.php"; 
	?>
</body>
</html>