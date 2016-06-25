<?php

require_once 'ModelScripts/GestorProductos.php';

$producto = new GestorProductos();


		$producto->modificaNombreProducto($_POST['idProducto'], $_POST['NOMBRE']);
		
		$producto->modificaPrecioProducto($_POST['idProducto'], $_POST['PRECIO']);

		$producto->modificaDCortaProducto($_POST['idProducto'], $_POST['DCORTA']);

		$producto->modificaDLargaProducto($_POST['idProducto'], $_POST['DLARGA']);
	
		$producto->modificaNumeroProducto($_POST['idProducto'], $_POST['STOCK']);
		header("Location: ../formAdminProductos.php");
	

?>