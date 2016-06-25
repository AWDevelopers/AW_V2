<!DOCTYPE html>
<html>
<head>
	<title>Pagina con estilos</title>
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css"/>-->
</head>
<body>
	<div id='contenedor'>
		<?php 
			require ('common.php');
			require_once('includes/ViewScripts/DonacionesVista.php');
			$vDonaciones = new vistaDonaciones();
			$vDonaciones->muestraDonacionesProyecto($_GET['id']);
	
		?>
		
	</div>
</body>
</html>
