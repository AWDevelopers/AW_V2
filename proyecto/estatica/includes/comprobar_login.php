<?php
	//session_start();
	include("config.php");
	$user=$_POST['usuario'];
	$pass=$_POST['contraseña'];
	$mysqli = new mysqli('localhost', 'root', '', 'incommong');
	
	// ¡Oh, no! Existe un error 'connect_errno', fallando así el intento de conexión
	/*if ($mysqli->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		exit;
	}*/
	//Realizamos la consulta 
	$consulta= "SELECT * FROM usuario WHERE email='$user' || usuario='$user'";
	$resultado=  mysqli_query($connection, $consulta);
	$_SESSION['login']= False;
	if($fila=mysqli_fetch_array($resultado)){
			$passUser = $fila["pass"];
			$passCrip = substr(MD5($pass),0,20);
			if($passUser == $pass){
				//Almacenamos el nombre de usuario,tipo, que ha hecho login y todos los datos del usuario
				$_SESSION['usuario']= $fila["usuario"];
				//$_SESSION['tipo']= $fila["tipo"];
				$_SESSION['login']= True;
				$_SESSION['datosUser']=[
					"DNI" => $fila["DNI"],
					"nombre" => $fila["nombre"],
					"apellidos" => $fila["apellidos"],
					"direccion" => $fila["direccion"],
					"cp" => $fila["cp"],
					"usuario" => $fila["usuario"],
					"pass" => $fila["pass"],
					"email" => $fila["email"],
					"fechaNacimiento" => $fila["fechaNacimiento"],
					"avatar" => $fila["avatar"],
					"sexo" => $fila["sexo"],
					"telefono" => $fila["telefono"],
					"tipo" => $fila["tipo"],
				];
			}
	}
	
	if($_SESSION['login'] == True){
		header("Location: ../index.php"); 
	}
	else{
		header("Location: ../login.php");
	}
	
	
	
?>
