<!DOCTYPE html>
<html>
<head>
	<title> Modificar proyecto </title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
			
			<div class = "contenido">
				<div class="atrasYAniade">
					<div class="atras">
						<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
					</div>		
				<?php 
						require_once "includes/ViewScripts/ProyectosVista.php";
						$vProyectos = new VistaProyectos();
						$vProyectos->muestraYmodifica($_REQUEST['id']);
				?>
			</div>
		</div>
		
	</div>
</body>
</html>