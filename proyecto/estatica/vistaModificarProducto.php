<!DOCTYPE html>
<html>
<head>
	<title>Proyectos ONGS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<!--<link rel="stylesheet" type="text/css" href="css/proyectosONG.css">-->
</head>
<body>
	<div id='contenedor'>
		<!--Aqui va el menu y la cabecera que es comun-->
		<?php require 'common.php'; ?>
		
		<!--Aqui va el contenido-->
		<div class="contenido">
			<div class="formulario">
					<form action="includes/formModificaProducto.php?id=<?=$_REQUEST['id']?>" method="POST">
						<div class="contenido2">
						<div id="formulariosTitulo"><p><h1> Formulario para editar un usuario </font></h1></p></div>
						<p><h2>Nombre del producto:</h2> </p>
						<!--<input type = "hidden" name = "idProducto" value = "<?= $_REQUEST['id']?>">-->
						<input type = "text" name= "nombre" value ="<?= $_REQUEST['nombre']?>">
						<p><h2>Precio del producto:</h2></p>
						<input type = "text"  name= "precio" value ="<?= $_REQUEST['precio']?>">
						<p><h2>Descripción corta del producto:</h2> </p>
						<textarea name= "descripcionCorta" rows="4" cols="40" value="<?= $_REQUEST['desc']?>"></textarea> 
						<p><h2>Descripción larga del producto:</h2> </p>
						<textarea  rows="10" cols="40" name= "descripcionLarga" value="<?= $_REQUEST['desl']?>"></textarea> 
						<p><h2>Stock</h2> </p>
						<input type = "text" name= "stock" value ="<?= $_REQUEST['stock']?>"></input>
						<p><h2>Imagen</h2> </p>
						<input id="file_url" type="file" name="imagen"> (*)</input>
						<p><input type= "submit" value = "MODIFICAR"></p>
						</div>
						<div>

					</form>
					
				</div>
				
		</div>
</body>
</html>