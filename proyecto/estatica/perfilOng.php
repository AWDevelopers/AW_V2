<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css"/>-->
</head>
<body>
	<div id='contenedor'>
		<?php 
			require ('common.php');
		?>
		<div class="contenidoPerfilOng">
			<div id="proyectoONG">
				<?php
					require_once 'includes/ViewScripts/OngsVista.php';
					$ong = new vistaOng();
					$ong->muestraPerfilOng($_GET['ong']);
					
				?>
			</div>
						
		</div>
	</div>
</body>
</html> 

