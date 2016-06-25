
<!DOCTYPE html>
<html>
<head>
	<title>Tienda InCommOng</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>

</head>
<body>
	<div id='contenedor'>
	<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
	
		<!--Aqui va el contenido-->
		<div class="contenido">
			<?php
				require_once 'includes/ViewScripts/ProductosVista.php';
				$modificaP = new vistaProductos();
				$modificaP->muestraModificarProducto($_GET['idProducto']);
			?>		
		</div>
	</div>
</body>
</html>
