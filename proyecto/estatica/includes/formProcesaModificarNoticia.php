<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorNoticias.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	if($app->usuarioLogueado() && $app->tieneRol("Admin")){
		$lista = new GestorNoticias();
		$id=$_REQUEST['id'];
		$titulo = $_REQUEST['titulo'];
		$tipo = $_REQUEST['tipo'];
		$descripcionCorta = $_REQUEST['desCorta'];
		$descripcionLarga = $_REQUEST['desLarga'];
		$imagen = "img/".$_REQUEST['imagen'];
		$salida = $lista->editaNoticia($id,$titulo, $tipo , $descripcionCorta, $descripcionLarga,$imagen);
		header("Location: ../vistaNoticiaDetallada.php?id=".$id);
	}
	else{
		header("Location: ../index.php");
	}
	
?>