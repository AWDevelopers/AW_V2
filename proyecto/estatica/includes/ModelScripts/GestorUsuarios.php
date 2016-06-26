<?php
//use \AW\proyecto\estatica\includes\DaoScripts\DaoUsuarios as DaoUsuarios;
require_once '/../DaoScripts/DAOUsuarios.php';
	class GestorUsuarios{
		private $dao;
		
		function __construct(){
			//$this->dao = DaoUsuarios::new DaoUsuarios();
			$this->dao = new DaoUsuarios();
			if (!isset($_SESSION)) session_start();
		}
		
		public function getListaUsuarios($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$lista = $this->dao->listaUsuarios($dniN);
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
				$array->append(new Usuario($lista[$i]['nombre'], $lista[$i]['DNI'],$lista[$i]['apellidos'], $lista[$i]['direccion'], $lista[$i]['cp'], $lista[$i]['usuario'],$lista[$i]['pass'],$lista[$i]['email'],$lista[$i]['fechaNacimiento'], $lista[$i]['avatar'],$lista[$i]['sexo'],$lista[$i]['telefono'], $lista[$i]['tipo']));
			}
			return $array;
		}
		
		public function comprobarLogin($user, $pass){
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			
			if(($this->dao->usuarioCorrecto($userN) == 0)){
				//usuario no correct, no existe
				$login=0;
				return $login;
			}
			else{
				$login = $this->dao->compruebaLogin($userN, $passN);
				return $login;
			}
		}
		
		public function comprobarDNI($dni){
			//$dni = $_REQUEST['dni'];
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$letra = substr($dniN, -1);
			$numeros = substr($dniN, 0, -1);
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
				return true;
			}else{
				return false;
			}
		}
		public function nuevoUsuario($user, $pass, $nombre, $apellidos, $dni, $email, $fechaNacimiento, $sexo, $telefono, $direccion, $cp, $avatar, $tipo ){
			//Eliminamos caracteres especiales
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			$nombreN= htmlspecialchars(trim(strip_tags($nombre)));
			$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			$fechaNacimientoN = htmlspecialchars(trim(strip_tags($fechaNacimiento)));
			$sexoN = htmlspecialchars(trim(strip_tags($sexo)));
			$telefonoN = htmlspecialchars(trim(strip_tags($telefono)));
			$direccionN = htmlspecialchars(trim(strip_tags($direccion)));
			$cpN = htmlspecialchars(trim(strip_tags($cp)));
			$avatarN = htmlspecialchars(trim(strip_tags($avatar)));
			
			//No existe el usuario
			if ($this->comprobarDNI($dniN) && strlen($passN)>5){
			  if($this->dao->existeUsuario($dniN, $emailN, $userN) == 0){
					if($avatarN == "img/"){
						$avatarN = "img/UsuarioSF.png";
					}
					$this->dao->insertaUsuario($userN, $passN, $nombreN, $apellidosN, $dniN, $emailN, $fechaNacimientoN, $sexoN, $telefonoN, $direccionN, $cpN, $avatarN, $tipo );
					return true;
				}    
				else{
					return false;
				}
			}
			else{
				return false;
			}
			return $avatarN;
		}
		
		public function existeUser($dni, $user, $email){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			
		}
		
		public function eliminarUsuario($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$this->dao->borraUsuario($dniN);
		}
		
		public function getUsuario($dni){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			return ($this->dao->seleccionaUsuario($dniN));
		}
		
		public function modificarContra($dni, $pass){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			$this->dao->modificarPass($dniN, $passN);
		}
		
		public function modificarPerfilUser($dni, $nombre, $apellidos, $email, $telefono, $direccion, $cp, $tipo, $avatar, $sexo, $usuario, $fecha){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$nombreN = htmlspecialchars(trim(strip_tags($nombre)));
			$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			$telefonoN = htmlspecialchars(trim(strip_tags($telefono)));
			$direccionN = htmlspecialchars(trim(strip_tags($direccion)));
			$cpN =  htmlspecialchars(trim(strip_tags($cp)));
			$tipoN =  htmlspecialchars(trim(strip_tags($tipo)));
			$avatarN =  htmlspecialchars(trim(strip_tags($avatar)));
			$sexoN =  htmlspecialchars(trim(strip_tags($sexo)));
			$usuario =  htmlspecialchars(trim(strip_tags($usuario)));
			$fechaN =  htmlspecialchars(trim(strip_tags($fecha)));
			$this->dao->modificarPerfilUser($dniN, $nombreN, $apellidosN, $emailN, $telefonoN, $direccionN, $cpN, $tipoN, $avatarN, $sexoN, $usuarioN, $fechaN );
		}
		
		public function modificarCamposUsuario( $dni , $nombre, $apellidos, $email, $telefono){
			$dniN = htmlspecialchars(trim(strip_tags($dni)));
			$nombreN = htmlspecialchars(trim(strip_tags($nombre)));
			$apellidosN = htmlspecialchars(trim(strip_tags($apellidos)));
			$emailN = htmlspecialchars(trim(strip_tags($email)));
			$telefonoN = htmlspecialchars(trim(strip_tags($telefono)));
			$this->dao->modificarCamposUsuario($dniN, $nombreN, $apellidosN, $emailN, $telefonoN );
			
		}
	}
?>