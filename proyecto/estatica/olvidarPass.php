<!DOCTYPE html>
<html>
	<head>
		<title>Registrate - InCommOng</title>
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
					<form name= formulario action="includes/formNuevaPass.php" method="POST">
					
					<div class="contenido2">
						
						<div id="formulariosTitulo"><p><h1>  Recuperar contraseña</h1></p></div>
						<p> <h2>DNI: </h2></p>
						<input id="dni" type="text" size="20" name="dni" placeholder= "08568754R" required></input> <div id="Info"></div></p>
						<p> <h2>Usuario: </h2></p>
						<input type="text" size="20" name="usuario" placeholder= "CarlitaRH" required> (*)</input> 
						<p> <h2>Correo electrónico: </h2></p>
						<input type="email" size="20" name="email" placeholder= "CarlaRH@gmail.com" required> (*)</input>
						<input type="submit" name="submit" value="Recuperar Contraseña">
						</p>
						
					</div>
						
					</form>
					
				</div>
				
		</div>
	</body>
</html>