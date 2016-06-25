<?php
include ('config.php');
use \AW\proyecto\estatica\includes\Aplicacion as App;
require_once 'ModelScripts/GestorVoluntarios.php';
$app = App::getSingleton();
	if ($app->usuarioLogueado() && ($app->tieneRol("Admin") || $app->tieneRol("User"))) {
		$lista = new GestorVoluntarios();
		$idVol = $_REQUEST['id'];
		$lista->eliminaVoluntario($idVol);
	}

?>