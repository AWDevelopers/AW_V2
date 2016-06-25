<?php
	include ('config.php');
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	require_once 'ModelScripts/GestorNoticias.php';
	$app = App::getSingleton();
	
	if ($app->usuarioLogueado() && $app->tieneRol("Admin","Error", "No tienes permisos")) {
		$lista = new GestorNoticias();
		$idNoticia=$_REQUEST['id'];
		$salida = $lista->eliminaNoticia($idNoticia);
	}
	header("Location: ../formAdminNoticias.php");
?>