<?php

require_once 'ModelScripts/GestorProductos.php';

$producto = new GestorProductos();


		if($_POST['NOMBRE'] != "" && $_POST['CIF'] != "" && $_POST['PRECIO'] != "" && $_POST['DCORTA'] != ""
			&& $_POST['DLARGA'] != "" && $_POST['STOCK'] != ""){
			$imagen = "img/".$_POST['IMAGEN'];
			$producto->insertaProducto(null, $_POST['CIF'], $_POST['STOCK'] ,$_POST['PRECIO'],  $_POST['NOMBRE'],$_POST['DCORTA'],$_POST['DLARGA'] , $imagen );

			header("Location: ../vistaAdminProductos.php");
		}
	

?>