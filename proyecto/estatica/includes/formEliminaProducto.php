<?php

require_once 'ModelScripts/GestorProductos.php';

$producto = new GestorProductos();


		if($_POST['id'] != ""){
			$producto->borrarProducto($_POST['id']);

			header("Location: ../vistaAdminProductos.php");
		}
	

?>