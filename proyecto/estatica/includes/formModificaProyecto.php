<?php
include ('config.php');
require_once 'ModelScripts/GestorProyectos.php';
$lista = new GestorProyectos();
	$id = $_REQUEST['idProyecto'];
	$nombre = $_REQUEST['nombre'];
	$dineroNecesario = $_REQUEST['dineroNecesario'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['imagen'];
	$numVoluntarios = $_REQUEST['numVoluntarios'];
	$fechaFin = $_REQUEST['fechaFin'];
	#$rol = $_SESSION['rol'];
	$lista->modificaProyecto($id, $nombre,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin);
	header("Location: ../formAdminProyectos.php);

?>