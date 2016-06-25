<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
	
	if (isset($_SESSION['login']) && $_SESSION['login']) {
		$lista = new GestorUsuarios();
		$dni = $_REQUEST['id'];
		$lista->eliminarUsuario($dni);
		require_once 'logout.php';
		header("Location: ../index.php");
		exit();
	}
?>