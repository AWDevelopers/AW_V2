<?php
include ('config.php');
require_once 'ModelScripts/GestorUsuarios.php';
    $lista = new GestorUsuarios();
    $user = $_REQUEST['usuario'];
    $pass = $_REQUEST['pass'];
	$login= $lista->comprobarLogin($user, $pass);
	//Login incorrecto
	if (!$login){
		header("Location: ../login.php");
	}
	else{
		//Login correcto
		header("Location: ../index.php");
	}
?>