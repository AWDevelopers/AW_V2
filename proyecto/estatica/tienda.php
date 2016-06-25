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
			<div class="filtro">
				<p>Filtros:</p>
				<!--Estos botones deberían hacer cosas, pero sin bd no van a poder-->
				<form method ="post">
				<input type= "submit" value ="nombre" name ="nombre"/>
				</form>
		
				<form method ="post">
				<input type= "submit" value ="desc" name ="desc"/>
				</form>

				<form method ="post">
				<input type= "submit" value ="asc" name ="asc"/>
				</form>
			</div>
			
			<?php 
				require_once "includes/ViewScripts/ProductosVista.php";
				$vProductos = new vistaProductos();
				$vProductos->muestraProductos();

			?>
		</div>
	</div>
</body>
</html>
