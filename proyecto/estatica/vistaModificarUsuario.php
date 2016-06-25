<!DOCTYPE html>
<html>
	<head>
		<title>Modifica un usuario - InCommOng</title>
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
					<form action="includes/formModificarUsuario.php?id=<?=$_REQUEST['DNI']?>" method="POST">
						<div class="contenido2">
						
						
							<div id="formulariosTitulo"><p><h1> Formulario para editar un usuario </font></h1></p></div>
								
								<p> <h2>Usuario: </h2></p>
								<input type="text" size="20" name="usuario" value="<?= $_REQUEST['usuario']?>" required> (*)</input>  
								<p> <h2>Nombre: </h2></p>
								<input type="text" size="20" name="nombre" value="<?= $_REQUEST['nombre']?>" required> (*)</input>
								<p> <h2>Apellidos: </h2></p>
								<input type="text" size="20" name="apellidos" value="<?= $_REQUEST['apellidos']?>" required></input> </p>
								<p> <h2>Correo electrónico: </h2></p>
								<input type="email" size="20" name="email" value="<?= $_REQUEST['email']?>" required> (*)</input>
								<p> <h2>Imagen: </h2></p>
								<input id="file_url" type="file" name="foto" required> (*)</input>
								<p> <h2>Fecha de Nacimiento: </h2></p>
								<input type="date" size="20" name="fecha" value="<?= $_REQUEST['fechaNacimiento']?>" required > (*)</input>
								<p> <h2>Sexo  </h2> </p>
								<select name="sexo" value="<?= $_REQUEST['sexo']?>" required>
									<option value="no_determinado">Sin Determinar</option>
									<option value="masculino">Masculino</option>
									<option value="femenino">Femenino</option>
								</select> (*) 
								<p> <h2>Telefono: </h2> </p>
								<input type="number" name="tlf" value="<?= $_REQUEST['telefono']?>" required></input>
								<p> <h2>Direccion: </h2></p>
								<input type="text" name="direccion" value="<?= $_REQUEST['direccion']?>" required></input>
								<p> <h2>CP: </h2></p>
								<input type="number" name="cp" value="<?= $_REQUEST['cp']?>" required></input>
								<!---Llamar aqui a una funcion que muestre el campo si es admin!-->
								
								<?php require 'tipoUsuario.php'; ?>
								<p><input type="submit" name="submit" value="Modificar"></p>
								</p>
								
							</div>
						<div>

					</form>
					
				</div>
				
		</div>
	</body>
</html>
