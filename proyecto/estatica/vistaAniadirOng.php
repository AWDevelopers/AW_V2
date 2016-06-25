<!DOCTYPE html>
<html>
	<head>
		<title>Registra una ONG - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

		
		
			<div class="contenido">
				<div class="formulario">
					<form action="includes/aniadirOng.php" method="POST">
					
						<div class="contenido2">
						
						<div id="formulariosTitulo"><p><h1> Formulario para una nueva ONG </font></h1></p></div>
						<p><h2>CIF de la Ong: </h2></p>
						<input type="text" name="CIF" required></input>
						<p><h2>Nombre de la Ong: </h2></p>
						<input type="text" name="nombre" required></input>
						<p><h2>Dirección: </h2></p>
						<input type="text" name="direccion"></input>
						<p><h2>Email de contacto: </h2></p>
						<input type="text" name="email" required></input>
						<p><h2>Usuario: </h2></p>
						<input type="text" name="usuario" required></input>
						<p><h2>Contraseña: </h2></p>
						<input type="text" name="pass" required></input>
						<p><h2>Teléfono de contacto: </h2></p>
						<input type="text" name="telefono"></input>
						<p><input type="submit" name="submit" value="Dar de alta Ong"></p>
						</div>
					</form>
					
				</div>
				
		</div>
	</body>
</html>
