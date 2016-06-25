<?php
	include ("config.php");
	include ("donacion.php");

	$dniusuario = $_POST['dni'];
	$idproyecto = $_POST['pid'];
	$cantidad = $_POST['cantidad'];

	$sql = "SELECT DNI FROM usuario WHERE DNI='$dniusuario'";
	$sql = mysqli_query($connection, $sql); 
	$result = mysqli_fetch_object($sql);
	
	if($result == NULL){
		//No existe ningun usuario con ese DNI
		echo 'Un usuario no registrado no puede hacer una donacion';
		echo '<a href="vistaAnadirDonacion.php">Pulse aqui para añadirla de nuevo </a>'; 
	}else{
		$sql2 = "SELECT idProyecto FROM proyecto WHERE idProyecto = '$idproyecto'";
		$sql2 = mysqli_query($connection, $sql2); 
		$result2 = mysqli_fetch_object($sql2);

		if($result2 == NULL){
			//No existe ningun usuario con ese DNI
			echo 'No puede hacer una donación a un proyecto no existente.';
			echo '<a href="vistaAniadirDonacion.php">Pulse aqui para añadirla de nuevo </a>'; 
		}else{
			$nueva_donacion = new donacion($dniusuario, $idproyecto, $cantidad);
			$nueva_donacion->addDonacion($connection);
			echo 'Se ha añadido la donacion correctamente';
			header('Location: ../procesarDonacion.php');
		}
	}

	$sql->free();
	$sql2->free();
?> 

