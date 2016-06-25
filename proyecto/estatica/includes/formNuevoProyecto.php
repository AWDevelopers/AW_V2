<?php
include ('config.php');
use \AW\proyecto\estatica\includes\Aplicacion as App;
require_once 'ModelScripts/GestorProyectos.php';
$app = App::getSingleton();
if($app->usuarioLogueado() && $app->tieneRol("Admin", "Error", "No tienes permisos")){
$lista = new GestorProyectos();
	$nombre = $_REQUEST['nombre'];
	$cif = $_REQUEST['cif'];
	$dineroNecesario = $_REQUEST['dinero'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['foto'];
	$numVoluntarios = $_REQUEST['voluntarios'];
	$fechaFin = $_REQUEST['fechaFin'];
	$salida = $lista->nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin);
	header("Location: ../vistaAdminProyectos.php");
}
exit();



?>