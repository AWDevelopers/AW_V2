<!DOCTYPE html>
<html>
	<head>
		<title>Aportar Donación - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		<!--</div>-->
		<!--CONTENIDO-->

			<div class="contenido">
			
			<?php
			use \AW\proyecto\estatica\includes\Aplicacion as App;
			$app = App::getSingleton();
			if ($app->usuarioLogueado()) {
			?>
			
				<div class="formulario">
					<form action="includes/aniadirDonacion.php" method="POST">
						<div class="contenido2">
							<p><h2>Dni: </h2></p>
							<input type="text" name="dni" required> (*)</input>
							<p><h2>Proyecto(id): </h2></p>
							<input type="text" name="pid" required value = "<?=$_POST['idProyecto']?>"> (*)</input>
							<p><h2>Cantidad a donar:
								<?php $dinero = $_POST['cantidad']?>
								<input type="text" name="cantidad" required value="<?= $dinero ?>" /> (*)</input>
							</h2></p>
							<p><input type="submit" name="submit" value="Hacer Donación"> (*)</input></p>
						</div>
					</form>
				</div>
			<?php
			}else{
			?>
				<h2>Usuario no logeado! </h2>
				<p>Para realizar una donación debes estar <a href="registrate.php">registrado</a> o <a href="login.php">logueado</a></p> 
			
			<?php	
			}
			?>
			
			</div>	
		</div>
	</body>
</html>
