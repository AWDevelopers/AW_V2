<?php
	class GestorVoluntarios{

		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoVoluntarios.php';
			require_once '/../DaoScripts/DaoUsuarios.php';
			require_once '/../DaoScripts/DaoProyectos.php';
			$this->dao = new DaoVoluntarios();
			$this->daoP = new DaoProyectos();
		}
		public function getListaVoluntarios(){
			$lista = $this->dao->listaVoluntarios();
			$array = new ArrayObject();
			for($j= 0; $j <sizeof($lista)-1 ; $j++){
			$array->append(new voluntario($lista[$j]['idVoluntariado'],$lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));		
			}
			return $array;
			
		}

		public function getSumHorasVoluntariado($dniUsuario){
			$lista = $this->dao->sumHorasVoluntario($dniUsuario);
			$sum = 0;
			for($j= 0; $j <sizeof($lista)-1 ; $j++){
			  $sum += ($lista[$j]['horaSalida'] - $lista[$j]['horaEntrada']);			
			}
			return $sum;
		}
		public function nuevoVoluntariado($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida){
			$daoU = new DaoUsuarios();
			//if($daoU->seleccionaUsuario($dniUsuario) != null){
				$this->daoP->restaVoluntarios($idProyecto, 1);
				return ($this->dao->insertaVoluntario($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida));
			//}

			return null;
		}

		public function eliminaVoluntario($idVol){
			return ($this->dao->borraVoluntario($idVol));
		}

		public function getVoluntarios($idProyecto){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($idProyecto)));
			$lista = $this->dao->seleccionaVoluntarios($idProyecto);
			$array = new ArrayObject();
			for($j= 0; $j <sizeof($lista)-1 ; $j++){
			$array->append(new voluntario($lista[$j]['idVoluntariado'],$lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));			
			}
			return $array;
		}

		public function getVoluntariosPorONG($cifOng){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($cifOng)));
			$lista  = $this->dao->seleccionaVoluntariosONG($cifOng);
			$array = new ArrayObject();
			for($j= 0; $j <sizeof($lista)-1 ; $j++){
			$array->append(new voluntario($lista[$j]['idVoluntariado'],$lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));
			}
			return $array;
		}

		public function getVoluntariosPorDNI($dni){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($dni)));
			$lista = $this->dao->seleccionaVoluntariosUsuario($dni);
			$array = new ArrayObject();
			for($j= 0; $j <sizeof($lista)-1 ; $j++){
			$array->append(new voluntario($lista[$j]['idVoluntariado'],$lista[$j]['idProyecto'], $lista[$j]['DNIUsuario'], $lista[$j]['dia'], $lista[$j]['horaEntrada'], $lista[$j]['horaSalida']));		
			}
			return $array;
		}
	}

?>