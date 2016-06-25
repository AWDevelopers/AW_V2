<?php
include ('config.php');
require_once 'ModelScripts/Voluntarios.php';
require_once 'ModelScripts/GestorVoluntarios.php';
		$id = $_REQUEST['id'];
		$dni = $_SESSION['DNI'];
		$dia = $_REQUEST['dia'];
		$horaI = $_REQUEST['horaIni'];
		$horaF = $_REQUEST['horaFin'];
		$GestorVoluntarios = new GestorVoluntarios();
		$GestorVoluntarios->nuevoVoluntariado($id,$dni,$dia, $horaI, $horaF);
		//header("Location: ../donaciones.php?id=".$id."dineroAcumulado=".$dineroAcumulado);
?>