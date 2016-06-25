<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion </title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


</head>

<body>
	<div id = 'contenedor'>
		<?php require 'common.php'; ?>
		
		<div class = "contenido">
			<div id = "panelAdmin">
				<!--<ul>-->
					<?php
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->tieneRol("Admin")) {
						?>
						<div class="cajaAdmin"><a href="vistaAdminNoticias.php"><button> Noticias</button></div></a>
						<div class="cajaAdmin"><a href="vistaAdminVoluntarios.php"> <button> Voluntarios</button></div></a>
						<div class="cajaAdmin"><a href="vistaAdminProyectos.php"><button> Proyectos</button></div></a>
						<div class="cajaAdmin"><a href="vistaAdminUsuarios.php"><button> Usuarios</button></div></a>
						<div class="cajaAdmin"><a href="vistaAdminONGs.php"><button> ONGs</button></div></a>
						<div class="cajaAdmin"><a href="vistaAdminProductos.php"><button> Productos</button></div></a>
					<?php
					}
					?>
		
				<!--</ul>-->
	
			</div>
		</div>

		
		
</body>
</html>
