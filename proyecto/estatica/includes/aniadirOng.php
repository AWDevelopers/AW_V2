<?php
	include ("config.php");
	include ('ong.php');
	//Obtenemos los valores del formulario
	$cif=$_POST['CIF'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	$telefono = $_POST['telefono'];


	$sql = "SELECT cif FROM ong WHERE cif='$cif' || nombre='$nombre'";
	$sql = mysqli_query($connection, $sql); 
   
  	$result = mysqli_fetch_object($sql);
	if($result == NULL){ 
	//No existe ninguna ong con ese nombre o cif, entonces la añadimos
		$nueva_ong = new ong($cif, $nombre, $direccion, $email, $usuario, $pass, $telefono);
		$nueva_ong->addOng($connection); 
		echo 'Se ha añadido la ong correctamente';
	}
	else{
		echo 'No puede agregar una ong con un cif o nombre existente';
		echo '<a href="vistaAniadirOng.php">Pulse aqui para añadirla de nuevo </a>';
	}

	//mysqli_close($conexion);
	$sql->free();
?> 