<?php
	include ("config.php");
	include ('ong.php');
	//Obtenemos los valores del formulario
	$nombre=$_POST['nombre'];
	
	$sql = "SELECT cif FROM ong WHERE cif='$cif' || nombre='$nombre'";
	$sql = mysqli_query($connection, $sql); 
   
  	$result = mysqli_fetch_object($sql);
	if($result == NULL){ 
		//No existe ninguna ong con ese nombre o cif, entonces la añadimos
		echo 'No se puede eliminar una ong no existente';
		echo '<a href="vistaEliminarOng.php">Pulse aqui para borrarla de nuevo </a>';	
	}
	else{
		deleteOng($connection, $nombre);
		echo 'Se ha eliminado la ong correctamente';
	}

	//mysqli_close($conexion);
	$sql->free();
?> 