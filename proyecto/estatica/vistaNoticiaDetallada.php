<!DOCTYPE html>
<html>
<head>
	<title>Detalle de la noticia</title>
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
                    require_once "includes/ViewScripts/NoticiasVista.php";
                    $vista= new NoticiasVista();
					$vista->muestraNoticia($_GET['id']);

				?>
				
			
		</div>
			

	</div>
</body>
</html>