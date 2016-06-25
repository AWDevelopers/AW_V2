<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Usuarios</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>

 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="js/usuariosAdmin.js"></script>
</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
			
			<div class = "contenido">
			<div id = "panelUsuarios">
			<div class = "panelNoticias">
				<div class="atrasYAniade">
					<div class="atras">
						<form action="panelAdmin.php"><input type="submit" value="Atras"></input></form>
					</div>
					<div class="aniade">
						<form action="registrate.php"><input type="submit" value="Añadir Usuario"></input></form>
					</div>			
				<?php 
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->tieneRol("Admin")) {
						require_once "includes/ViewScripts/UsuariosVista.php";
						$vUsuarios = new UsuariosVista();
						$vUsuarios->muestraUsuarios();
					}
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
