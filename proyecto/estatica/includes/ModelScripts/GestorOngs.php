<?php
	require_once '/../DaoScripts/DaoOngs.php';
	class GestorOngs{

		private $daoOngs;

		function __construct(){
			
			$this->daoOngs = new DaoOngs();
		}


		public function seleccionaOng($cif){
			$cifN = htmlspecialchars(trim(strip_tags($cif)));
			return ($this->daoOngs->seleccionaOng($cifN));
		}

		public function modificaTelefono($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyTelefono($nuevoN, $actualN));
		}

		public function modificaNombre($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyNombre($nuevoN, $actualN));
		}
		public function modificaUsuario($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyUsuario($nuevoN, $actualN));
		}
		public function modificaPass($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyPass($nuevoN, $actualN));
		}
		public function modificaDir($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyDireccion($nuevoN, $actualN));
		}
		public function modificaMail($nuevo, $actual){
			$nuevoN = htmlspecialchars(trim(strip_tags($nuevo)));
			$actualN = htmlspecialchars(trim(strip_tags($actual)));
			$dao = new DaoOngs();
			return ($dao->modifyEmail($nuevoN, $actualN));
		}

		public function deleteOng($cif){
			$cifN = htmlspecialchars(trim(strip_tags($cif)));
			$dao = new DaoOngs();
			return ($dao->deleteOng($cifN));
		}
		public function addOng($cif, $nombre, $dir, $mail, $user, $pass, $tlf, $imagen){
			$cifN = htmlspecialchars(trim(strip_tags($cif)));
			$nombreN = htmlspecialchars(trim(strip_tags($nombre)));
			$dirN = htmlspecialchars(trim(strip_tags($dir)));
			$mailN = htmlspecialchars(trim(strip_tags($mail)));
			$userN = htmlspecialchars(trim(strip_tags($user)));
			$passN = htmlspecialchars(trim(strip_tags($pass)));
			$tlfN = htmlspecialchars(trim(strip_tags($tlf)));
			$img =  htmlspecialchars(trim(strip_tags($imagen)));
			$dao = new DaoOngs();
			
			//if($dao->existeOng($cifN, $nombreN) == 1){
				return ($dao->addOng($cifN, $nombreN, $dirN, $mailN, $userN, $passN, $tlfN, $img));
			//}else{
			//	header("Location: procesarError.php");
			//}
		}

		public function getLista(){
			$dao = new DaoOngs();
			$lista = $dao->listaOngs();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new Ong($lista[$i]['CIF'], $lista[$i]['nombre'],$lista[$i]['direccion'], $lista[$i]['email'], $lista[$i]['usuario'], $lista[$i]['pass'],$lista[$i]['telefono'],$lista[$i]['imagen']));
			}
			return $array;
		}
		
	}

?>