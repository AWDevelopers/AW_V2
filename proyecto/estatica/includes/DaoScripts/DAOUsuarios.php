<?php
	require_once '/../ModelScripts/usuario.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	
	class DaoUsuarios{

		private $array;

		function listaUsuarios($dni){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = "SELECT * FROM usuario WHERE DNI<>'$dni'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs->num_rows >0 )
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}

		function usuarioCorrecto($userName){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s'", $con->real_escape_string($userName), $con->real_escape_string($userName));
		
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL){
				$num_cols = $rs->num_rows;
				$rs->free();
				return $num_cols;
			}
		}
		
		function existeUsuario($dni, $email, $user){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$numCol=0;
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s' OR DNI='%s'", $con->real_escape_string($user), $con->real_escape_string($email), $con->real_escape_string($dni));
			$rs = $con->query($sql) or die ($con->error);
			$numCol = $rs->num_rows;
			$rs->num_rows;
			//$con->close();
			return $numCol;
		}
		
		function compruebaLogin($user, $pass){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM usuario WHERE usuario='%s' OR email='%s'", $con->real_escape_string($user), $con->real_escape_string($user));
			$rs = $con->query($sql) or die ($con->error);
			$login =false;
			if($row = $rs->fetch_assoc()){    
					//Si el usuario es correcto ahora validamos su contraseña
					$passBd = $row["pass"];
					if (password_verify($pass, $passBd)) {
						//contraseña correcta hacemos sesion

						$usuario = new Usuario($row["nombre"], $row["DNI"], $row["apellidos"], $row["direccion"], $row["cp"], $row["usuario"], $row["pass"], $row["email"], $row["fechaNacimiento"], $row["avatar"], $row["sexo"],$row["telefono"], $row["tipo"]);
						$app->login($usuario);
						$login=true;
					}
					else
						 {	
							$login=false;
						}
			}
			else
			{	
				$login=false;
			}
			return $login;
		}
		
		function insertaUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar, $tipo ){
			$app = App::getSingleton();
            $con = $app->conexionBd();
		
			$opciones = [
				'cost' => 11,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
			];
			$contra = $pass;
			$contra = password_hash($contra, PASSWORD_BCRYPT, $opciones)."\n";
			
			$sql = "INSERT INTO usuario (DNI, nombre, apellidos, direccion, cp, usuario, pass, email, fechaNacimiento, avatar, sexo, telefono,tipo)
			VALUES ( '$dni', '$nombre', '$apellidos', '$direccion', '$cp', '$user', '$contra', '$email', '$fechaNacimiento', '$avatar', '$sexo', '$telefono', '$tipo')";
			$rs = $con->query($sql) or die ($con->error);
			

		}
		
		

		function borraUsuario($DNI){
			$app = App::getSingleton();
			$con = $app->conexionBd();
            $sql = "DELETE FROM usuario WHERE DNI='$DNI'";
			$con->query($sql) or die ($con->error);
		}

		function seleccionaUsuario($DNI){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = "SELECT * FROM usuario WHERE DNI = '$DNI'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Usuario($lista['nombre'], $lista['DNI'], $lista['apellidos'], $lista['direccion'], $lista['cp'], $lista['usuario'], $lista['pass'], $lista['email'], $lista['fechaNacimiento'], $lista['avatar'], $lista['sexo'], $lista['telefono'], $lista['tipo']);
				}
				$rs->free();
				return ($resultado);
			}
		}
		
		public function modificarPass($dni, $pass){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$opciones = [
				'cost' => 11,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
			];
			$contra = $pass;
			$contra = password_hash($contra, PASSWORD_BCRYPT, $opciones)."\n";
            $sql = "UPDATE usuario SET pass='$contra' WHERE DNI= '$dni'";
			$con->query($sql);
			}

		public function modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono, $direccion, $cp, $tipo, $avatar, $sexo, $usuario, $fecha){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql="UPDATE `usuario` SET `nombre`='$nombre',`apellidos`='$apellidos',`direccion`='$direccion',`cp`='$cp',`usuario`='$usuario',`email`='$email',`fechaNacimiento`='$fecha',`avatar`='$avatar',`sexo`='$sexo',`telefono`='$telefono',`tipo`='$tipo' WHERE `DNI`='$dni'";
			$con->query($sql);
		}
		
		public function eliminarUsuario($dni){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = "DELETE usuario WHERE DNI='$dni'";
			$con->query($sql);
		
		}
	}

?>