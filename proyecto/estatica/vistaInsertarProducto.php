<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/proyectosONG.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
			
			<form action="includes/formInsertarProducto.php" method="POST">
			  <p>Nombre del producto
			  	<input type="text" name="NOMBRE" required></input></p>
			  <p>Cif
			  	<input type="text" name="CIF" required></input></p>
			  <p>Precio
			  	<input type="text" name="PRECIO"></input> </p>
			  <p>Descripción corta
				<input type="text" name="DCORTA" required></input></p>
			  <p>Descripción larga
				<input type="text" name="DLARGA" required></input></p>
			  <p>Número de unidades
				<input type="text" name="STOCK" required></input></p>
			  <p>Imagen
			  <input id="file_url" type="file" name="IMAGEN"> (*)</input>
			  <p><input type="submit" ></p>
			  </form>
		
		</div>
	</div>
</body>
</html>