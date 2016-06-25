<?php
		$dni = $_REQUEST['dni'];
		$letra = substr($dni, -1);
		$numeros = substr($dni, 0, -1);
		if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
			echo '<div id="Error"><img src="img/yes.jpg" alt="" /></div>';
			return true;
		}else{
			echo '<div id="Error"><img src="img/no.jpg" alt="" /></div>';
			return false;
		}
?>