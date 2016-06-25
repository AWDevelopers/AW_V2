<!DOCTYPE html>
<html>
<head>
	<title> Panel de Administracion de Productos</title>
	<link rel = "stylesheet" type = "text/css" href="css/colorsandtext.css"/>
		<link rel = "stylesheet" type = "text/css " href="css/estilos.css"/>


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
							<form action="vistaInsertarProducto.php"><input type="submit" value="Añadir Producto"></input></form><!--Falta la vista para añadir profucto-->	
							<form action="vistaBorrarProducto.php"><input type="submit" value="Borrar Producto"></input></form>
							<form action="vistaModificarProducto.php"><input type="submit" value="Modificar Producto"></input></form>
					</div>
						
				<?php 
					use \AW\proyecto\estatica\includes\Aplicacion as App;
					$app = App::getSingleton();
					if ($app->usuarioLogueado() && $app->tieneRol("Admin")) {
						require_once "includes/ViewScripts/ProductosVista.php";
						$vProyectos = new vistaProductos();
						$vProyectos->muestraProds();
					}
				?>
			</div>
		</div>
		
	</div>
</body>
</html>
