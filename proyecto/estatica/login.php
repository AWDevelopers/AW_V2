<!DOCTYPE html>
<html>
	<head>
		<title>Login - InCommOng</title>
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
					
					<form action="includes/formLogin.php" method="POST">
						<p> <h2><align = center> <font color= white> Inicio de sesión </font></h2></p>
						<p>    
						<input type="text" name="usuario" placeholder= "Usuario" required > (*)</input> </p>
						
						<p>  
						<input type="password" name="pass" placeholder= "Contraseña" required> (*)</input></p>
						
						
						
						<a href="olvidarPass.php"><p><h3>Olvidaste la contraseña</h3></p></a>
						<input type="submit" name="submit" value="Login">
					</form>
					
				</div>
				<div class="imagen">
					<img src="img/nuevologo.png">
				</div>
				
		</div>
	</body>
</html>
