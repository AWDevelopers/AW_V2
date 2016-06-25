<!DOCTYPE html>
<html>
	<head>
		<title>Nuevo Proyecto - InCommOng</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {    
		    $('#cif').blur(function(){

		        $('#Info').html('<img src="img/loader.gif" alt="" />').fadeOut(1000);

		        var username = $(this).val();        
		        var dataString = 'cif='+username;

		        $.ajax({
		            type: "POST",
		            url: "includes/checkCif.php",
		            data: dataString,
		            success: function(data) {
		                  $('#Info').html(data).fadeIn(1000);
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
					<form id="formNuevoProyecto" action="includes/formNuevoProyecto.php" method="POST">
						<div class="contenido2">	
							
							<div id="formulariosTitulo">
							<p><h1> Formulario para un nuevo proyecto</h1></p></div>
							
							<p><h2> Nombre del proyecto: </h2></p>
							<input type="text" name="nombre" required> (*)</input>
							<p><h2> CIF Ong: </h2></p>
							<input id="cif" type="text" name="cif" required> (*)</input><div id="Info"></div>
							<p><h2> Imagen: </h2></p>
							<input id="file_url" type="file" name="foto"></input>
							<p> <h2>Fecha de finalizacion: </h2></p>
							<input type="date" size="20" name="fechaFin"> (*)</input></p>
							<p><h2> Dinero necesario: </h2></p>
							<input type="number" name="dinero"> (*)</input>
							<p><h2> Voluntarios necesarios: </h2></p>
							<input type="number" name="voluntarios"> (*)</input>
							<p><h2> Descripcion corta(*): </h2></p>
							<textarea name="descripcionCorta" rows="4" placeholder= "Descripcion corta."></textarea>
							<p><h2> Descripcion larga: </h2></p>
							<textarea name="descripcionLarga" rows="10" placeholder= "Descripcion larga..."></textarea>
							<p><input type="submit" name="button" value="NUEVO"></p>
							
						</div>
					</form>
				</div>
		</div>
	</body>
</html>
