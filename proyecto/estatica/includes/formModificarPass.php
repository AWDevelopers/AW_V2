<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorUsuarios.php';
		if (isset($_SESSION['login']) && $_SESSION['login']) {
			$lista = new GestorUsuarios();
			$dni = $_REQUEST['id'];
			$pass1 = $_REQUEST['pass1'];
			$pass2 = $_REQUEST['pass2'];
			if($pass1 == $pass2 && strlen($pass1) >5 && strlen($pass2) >5){
				$lista->modificarContra($dni,$pass1);
				echo "Se ha modificado la contraseña correctamente";
				header("Location: ../vistaPerfilUsuario.php");
			}
			else{
				echo "No se puede modificar";
			}
			exit();
		}

?>