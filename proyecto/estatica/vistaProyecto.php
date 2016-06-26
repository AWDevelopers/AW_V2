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
			
				<?php
					require_once "includes/ViewScripts/ProyectosVista.php";
					$vista = new vistaProyectos();
					$vista->muestraProyecto($_GET['id']);
				?>	
			
		</div>
			

		</div>
	</div>
</body>
</html>
