<?php
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
 	echo '<div id="cabecera">';
			echo '<div class="avatar">';
				if ($app->usuarioLogueado()) {
					$imagen = $_SESSION['img'];
					echo '<a href="vistaPerfilUsuario.php"><img src="'.$imagen.'" WIDTH=120 HEIGHT=120 ALT="Avatar usuario"> </a>';
				}
			echo '</div>';
			echo '<div class="titulo"> <IMG SRC="img/tituloPagina.png" WIDTH=500 HEIGHT=150 ALT="Avatar usuario"> </div>';
			echo '<div class="sesion">';
				if ($app->usuarioLogueado()) {
					echo '<a href="includes/logout.php"><IMG SRC="img/power.png" WIDTH=60 HEIGHT=60 ALT="Avatar usuario"></a>';
				}
			echo '</div>';
			echo '<div class="login">';
				if ($app->usuarioLogueado()) {
					echo 'Welcome, ' .$_SESSION['nombre'];
				} else {
					echo '<p>Usuario desconocido. <a href="login.php">Inicia sesion</a> o <a href="registrate.php">Registrate</a>!</p>';
				}
			echo '</div>';
 	echo '</div>'
?>