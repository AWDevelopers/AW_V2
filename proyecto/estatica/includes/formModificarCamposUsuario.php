<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	if($app->usuarioLogueado() ){
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$nombre = $_REQUEST['nombre'];
			$apellidos = $_REQUEST['apellidos'];
			$email = $_REQUEST['email'];
			$telefono = $_REQUEST['telefono'];
			$lista->modificarCamposUsuario( $dni , $nombre, $apellidos, $email, $telefono);
			header("Location: ../vistaPerfilUsuario.php");
			exit();
	}

?>