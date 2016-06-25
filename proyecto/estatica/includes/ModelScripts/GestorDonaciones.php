<?php
	require_once '/../DaoScripts/DaoProyectos.php';
	require_once '/../DaoScripts/DaoDonaciones.php';
	class GestorDonaciones{

		private $dao;
		function __construct(){
			$this->dao = new DaoProyectos();
			$this->daoD = new DaoDonaciones();

		}

		public function addDonacion($dni, $id, $dinero){
			
			$this->dao->sumaDineroAcumulado($id, $dinero);
			$this->daoD->addDonacion($dni, $id, $dinero);
		}
	}

?>