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
				<form method ="post">
					<input type= "submit" value ="Nombre" name ="nombre"/>
				</form>
		
				<form method ="post">
					<input type= "submit" value ="Precio descendente" name ="desc"/>
				</form>

				<form method ="post">
					<input type= "submit" value ="Precio ascendente" name ="asc"/>
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
