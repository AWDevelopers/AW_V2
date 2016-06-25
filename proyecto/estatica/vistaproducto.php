<!DOCTYPE html>
<html>
	<head>
		<title>Producto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	</head>
	<body>
		<!--CABECERA+MENU-->
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>

		<!--CONTENIDO-->
		<div class="contenido">
			<?php
					require_once "includes/ViewScripts/ProductosVista.php";
					$vProducto = new vistaProductos();
					$vProducto->muestraProducto($_GET['idProducto']);

			?>
		</div>
	</body>
</html>





 
