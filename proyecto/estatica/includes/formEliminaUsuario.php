﻿<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
	
	if (isset($_SESSION['login']) && $_SESSION['login']) {
		$lista = new GestorUsuarios();
		$dni = $_POST['DNI'];
		$lista->eliminarUsuario($dni);
		header("Location: ../vistaAdminUsuarios.php");
		exit();
	}
?>