<?php

	$funcion = $_REQUEST['tienda'];


	switch($funcion){
		case 'INSERTAR':
			header("Location: ../vistaInsertarProducto.php");
			exit();
			break;

		case 'BORRAR':
			header("Location: ../vistaBorrarProducto.php");
			exit();
			break;
	}

?>