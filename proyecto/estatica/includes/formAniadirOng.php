<?php
include ('config.php');
require_once 'ModelScripts/GestorOngs.php';
use \AW\proyecto\estatica\includes\Aplicacion as App;
$app = App::getSingleton();
if($app->usuarioLogueado() && $app->tieneRol("Admin")){
	$lista = new GestorOngs();
    $cif=$_REQUEST["CIF"];
	$nombre=$_REQUEST["nombre"];
	$dir=$_REQUEST["direccion"];
	$mail=$_REQUEST["email"];
	$user=$_REQUEST["usuario"];
	$pass=$_REQUEST["pass"];
	$tlf=$_REQUEST["telefono"];
	$imagen = "img/".$_REQUEST['foto'];
	$salida = $lista->addOng($cif, $nombre, $dir, $mail, $user, $pass, $tlf, $imagen);
	header("Location: ../procesarInsertar.php");
	}
	
?>