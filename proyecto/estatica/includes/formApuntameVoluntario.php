<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorVoluntarios.php';
$lista = new GestorVoluntarios();
		$id = $_REQUEST['idProyecto'];
		if (isset($_SESSION['login']) && $_SESSION['login'])
			header("Location: ../calendarioUsuario.php?id=".$id);
		else
			header("Location: ../registrate.php");
		exit();
?>