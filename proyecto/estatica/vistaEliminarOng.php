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
			<div id="proyectoONG">
				<?php
					require_once "includes/ViewScripts/OngsVista.php";
					if(isset($_GET['CIF'])){
						$vONG = new vistaOng();
						$vONG->eliminarOng($_GET['CIF']);
					}else{
						$vONG = new vistaOng();
						$vONG->muestraEliminarOng();
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>