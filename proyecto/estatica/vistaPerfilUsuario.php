<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	<!--<link rel="stylesheet" type="text/css" href="css/estilosSilviaDonaciones.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
			<?php
			require_once ("includes/ViewScripts/UsuariosVista.php");
			if (isset($_SESSION['login']) && $_SESSION['login']) {
					$vista = new UsuariosVista();
					$dni= $_SESSION['DNI'];
					$vista->perfilUsuario($dni);
			}
			?>
		</div>
		</div>
	</div>
</body>
</html>
