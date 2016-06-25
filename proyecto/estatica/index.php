<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/colorsandtext.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
</head>
<body>
	<div id='contenedor'>
		<?php require 'common.php'; ?>
		<div class="contenido">
			<div id="noticias">
				<video id="videoPrincipal" autoplay controls> 
				<source src="videos/videOng.webm" type="video/webm">
					Your browser does not support HTML5 video.
				</video>

				<h1>Noticias</h1>
				<?php
					require_once ("includes/ViewScripts/NoticiasVista.php");

					$vista = new NoticiasVista();
					$vista->muestraNoticiasPrimarias();
					$vista->muestraNoticiasSecundarias();
					$vista->muestraNoticiasTerciarias();
					$vista->muestraNoticiasOtras();
				?>
				<script>
					var slideIndex = 0;
					carousel();
					function carousel() {
					    var i;
					    var x = document.getElementsByClassName("principal");
					    for (i = 0; i < x.length; i++) {
					      x[i].style.display = "none";
					    }
					    slideIndex++;
					    if (slideIndex > x.length) {slideIndex = 1}
					    x[slideIndex-1].style.display = "block";
					    setTimeout(carousel, 5000);
					}
				</script>

			</div>
		</div>
	</div>
</body>
</html>