<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	require_once '/../DaoScripts/DaoDonaciones.php';
	class GestorDonaciones{

		private $dao;
		private $daoD;
		function __construct(){
			$this->dao = new DaoProyectos();
			$this->daoD = new DaoDonaciones();

		}

		public function addDonacion($dni, $id, $dinero){
			$idD= htmlspecialchars(trim(strip_tags($id)));
        	$dineroD = htmlspecialchars(trim(strip_tags($dinero)));
        	$dniD= htmlspecialchars(trim(strip_tags($dni)));
        	
			
			$this->daoD->addDonacion($dniD, $idD, $dineroD);
			$this->dao->sumaDineroAcumulado($idD, $dineroD);
		}
	}

?>