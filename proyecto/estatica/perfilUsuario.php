<!DOCTYPE html>
<html>
<head>
	<title>Perfil de usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	  <!--<link rel="stylesheet" type="text/css" href="css/perfilUsuario.css"/>-->
	  
</head>
<body>
	<div id="contenedor">
	<?php require("common.php");?>
	
	
	<div class="contenido">
		
		<div id= "contenidoPerfilUsuario">
			<div class="cabeceraPerfil">
				<div id="volver" class ="cabeceraPerfil">
					<button name = "volver" class= "bCabecera" ><img src="img/back.png"></button>

				</div>
				<div id="fotoUsuario" class = "cabeceraPerfil">
					<center>
						<img src="img/perfil.png">
						<strong>
						<p>Nombre Apellidos</p>
						</strong>
					</center>
				</div>
				<div id="cerrar" class = "cabeceraPerfil">
					<button id = "bCerrar" class="bCabecera" ><img src="img/salir.png"></button>
				</div>
			</div>

			<div class = "datosUsuario" id="datosPersonales">
				<p>Datos personales</p>
				
						<p>Nombre : Nombre</p>
						<p>Apellidos :Apellido1 apellido2</p>
						<p>Email : emal@email.com</p>
						<p>DNI : 01010101-A</p>
						<p>Teléfono : 999 99 99 99</p>
				
			</div>
			<div id="cambiaContrasena" class= "datosUsuario">
				<p>Cambiar contraseña</p>
				<form>
					Nueva contraseña:
					<input type="password"></input>
					Repetir contraseña:
					<input type="password"></input>
					<center><input type="submit" value="Confirmar"></input></center>
				</form>
			</div>

			<div id="bolsaHoras" class ="datosUsuario">
				<p>Bolsa de horas</p>
				<p>Horas semanales: 8h</p>
				<form>
					<p>Día</p>
					<input type="date" name="dia">
					<p>Horas</p>
					<input type="time" name="horas">
					<center><input type="submit" value ="confirmar"></input></center>
				</form>
			</div>

			<div id= "formularioPerfil" class= "datosUsuario">
				<p>Editar datos usuario</p>
				<form >
					
					Nombre
					<input type ="text" name ="nombre"/>
					<br>Apellidos
					<input type ="text" name ="apellidos" />
					<br>E-mail 
					<input type ="email" name ="email" >
					<br>Teléfono 
					<input type ="text" name ="telefono" >
					<center>
						<input type ="submit" value="editar"></input>
					</center>
				</form>
			</div>
		</div>

	</div>
	</div>
</body>
</html>
