<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Usuarios</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>

		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
   		<script src="js/voluntariado.js"></script>
</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
			<div class = "contenido">
			<div id = "panelUsuarios">
			<div class = "panelNoticias">
				<div class="atrasYAniade">
					<div class="atras">
				<form action="vistaAdminVoluntarios.php"><input type="submit" value="Atras"></input></form>	
					</div>
				</div>			
				<?php 
					require_once "includes/ViewScripts/VoluntariosVista.php";
					$vVoluntarios = new voluntariosVista();
					$vVoluntarios->muestraVoluntariosProyecto($_GET['idP']);
				?>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>
