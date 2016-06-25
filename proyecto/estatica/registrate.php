<!DOCTYPE html>
<html>
	<head>
		<title>Registrate - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {    
		    $('#dni').blur(function(){

		        var username = $(this).val();        
		        var dataString = 'dni='+username;

		        $.ajax({
		            type: "POST",
		            url: "includes/checkDNI.php",
		            data: dataString,
		            success: function(data) {
						   $('#Info').html(data).fadeIn();
		            }

		        });
		    });              
		});    
		</script>
		
		
		
	</head>
	<body>
		<div id='contenedor'>
			<!--Aqui va el menu y la cabecera que es comun-->
			<?php require 'common.php'; ?>
		</div>
		<!--CONTENIDO-->

			<div class="contenido">
				<div class="formulario">
					<form name= formulario action="includes/formRegistro.php" method="POST">
					
					<div class="contenido2">
						
						<div id="formulariosTitulo"><p><h1>  Formulario de registro</h1></p></div>
						
						<p> <h2>Usuario: </h2></p>
						<input type="text" size="20" name="usuario" placeholder= "CarlitaRH" required> (*)</input> 
						<p> <h2>Contraseña: </h2></p>
						<input type="password" size="20" name="pass"  placeholder= "ej. 7gt5re2" required> (*)</input> 
						<p> <h2>Nombre: </h2></p>
						<input type="text" size="20" name="nombre" placeholder= "Carla " required> (*)</input>
						<p> <h2>Apellidos: </h2></p>
						<input type="text" size="20" name="apellidos" placeholder= "Ruiz Herrero" required></input> </p>
						<p> <h2>DNI: </h2></p>
						<input id="dni" type="text" size="20" name="dni" placeholder= "08568754R" required></input> <div id="Info"></div></p>

						<p> <h2>Correo electrónico: </h2></p>
						<input type="email" size="20" name="email" placeholder= "CarlaRH@gmail.com" required> (*)</input>
						<p> <h2>Imagen: </h2></p>
						<input id="file_url" type="file" name="foto"> (*)</input>
						<p> <h2>Fecha de Nacimiento: </h2></p>
						<input type="date" size="20" name="fecha" > (*)</input>
						<p> <h2>Sexo  </h2> </p>
						<select name="sexo">
							<option value="no_determinado">Sin Determinar</option>
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
						</select> (*) 
						<p> <h2>Telefono: </h2> </p>
						<input type="number" name="tlf" placeholder= "601020300"></input>
						<p> <h2>Direccion: </h2></p>
						<input type="text" name="direccion" placeholder= "Gran Via"></input>
						<p> <h2>CP: </h2></p>
						<input type="number" name="cp" placeholder= "28020"></input>
						<!---Llamar aqui a una funcion que muestre el campo si es admin!-->
						
						<?php require 'tipoUsuario.php'; ?>
						<p> <h4> <font color= yellow> Para finalizar el registro haz click aqui! </font></h4>
						<input type="submit" name="submit" value="Registrate">
						</p>
						
					</div>
						
					</form>
					
				</div>
				
		</div>
	</body>
</html>


						