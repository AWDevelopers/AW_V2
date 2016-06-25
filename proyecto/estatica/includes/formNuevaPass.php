<?php
include ('config.php');
require_once 'ModelScripts/GestorUsuarios.php';
		$lista = new GestorUsuarios();
		$user= $_REQUEST['usuario'];
		$correo= $_REQUEST['email'];
		$dni = $_REQUEST['dni'];
		//$lista->
		require_once 'logout.php';
		header("Location: ../index.php");
		exit();

?>