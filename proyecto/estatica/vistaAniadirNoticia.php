<!DOCTYPE html>
<html>
	<head>
		<title>Añade una noticia - InCommOng</title>
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
					if ($app->usuarioLogueado()  && $app->tieneRol("Admin")) {
				?>
				<div class="formulario">
					<form action="includes/formProcesaAniadirNoticia.php" method="POST">
						<div class="contenido2">
						
						
							<div id="formulariosTitulo"><p><h1> Formulario para una nueva noticia </font></h1></p></div>
							
								<p><h2>Titulo de la noticia:</h2> </p>
								<input type="text" name="titulo" required> (*)</input>
								<p><h2>Tipo de la noticia: </h2></p>
								<select name="tipo">
									<option value="primaria">Primaria</option>
									<option value="secundaria">Secundaria</option>
									<option value="terciaria">Terciaria</option>
									<option value="otras">Otras</option>  
								</select> (*)</p>
								<p><h2> Descripción corta de la noticia (*):</h2> </p>
								<textarea name="descripcionCorta" rows="4" placeholder= "Descripcion corta." ></textarea>
								<p><h2> Descripción larga de la noticia: </h2> </p>
								<textarea name="descripcionLarga" rows="10" placeholder= "Descripcion larga de la noticia..." ></textarea>
								<p><h2> Imagen: </h2></p>
								<input id="file_url" type="file" name="imagen" required> (*)</input>
								<p><input type="submit" name="button" value="Nueva Noticia"></p>
							</div>
						<div>

					</form>
					
				</div>
			<?php	
			}
			?>	
		</div>
	</body>
</html>
