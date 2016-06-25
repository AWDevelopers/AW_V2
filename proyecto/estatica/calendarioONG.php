<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/calendarionONG.css"/>-->
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<div class="contenido">
			<div id="usuarios">
				<h2>Usuarios disponibles</h2>
				<center>
				<ol>
					<li><p>Pedro Jimenez</p></li>
					<li><p>Carlos Sanchez</p></li>
					<li><p>Ezequiel Fernandez</p></li>
					<li><p>Amanda de Miguel</p></li>
					<li><p>Luisa Fernandez</p></li>
					<li><p>Jaime Exposito</p></li>
					<li><p>Olivia Moreno</p></li>
					<li><p>Monica Diaz</p></li>
					<li><p>Olivia Moreno</p></li>
					<li><p>Sergio Lopez</p></li>
					<li><p>Juan Pedro Serrano</p></li>
					<li><p>Ivan Gonzalez</p></li>
				</ol>
				</center>
			</div>
			<div id = "fechas">
				<h2>Fechas disponibles</h2>
				<center>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				<p><input type="date"></input></p>
				</center>
			</div>
			<div id = "horas">
				<h2>Horas disponibles</h2>
				<center>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				<p><input type="time"></input></p>
				</center>
			</div>
	</body>
</html>