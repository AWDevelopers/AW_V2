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
				<?php
						use \AW\proyecto\estatica\includes\Aplicacion as App;
						$app = App::getSingleton();
						if(!$app->usuarioLogueado()){
					?>
				<div class="formulario">
					
					<form action="includes/formLogin.php" method="POST">
						<p> <h2><align = center> <font color= white> Inicio de sesión </font></h2></p>
						<p>    
						<input type="text" name="usuario" placeholder= "Usuario" required > (*)</input> </p>
						
						<p>  
						<input type="password" name="pass" placeholder= "Contraseña" required> (*)</input></p>
						
						
						<input type="submit" name="submit" value="Login">
					</form>
					
				</div>
				<div class="imagen">
					<img src="img/nuevologo.png">
				</div>
				<?php
					}
				?>
				
		</div>
	</body>
</html>
