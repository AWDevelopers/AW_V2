
<!DOCTYPE html>
<html>
<head>
	<title>ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/estilosSilviaVolunt.css">-->

</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php';?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
			<?php
			require_once ("includes/ViewScripts/ProyectosVista.php");

			$vista = new vistaProyectos();
			$vista->muestraProyectosVoluntarios();
			?>
		</div>
	</div>
</body>
</html>

