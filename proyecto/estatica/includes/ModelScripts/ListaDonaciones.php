<?php

	require_once '/../DaoScripts/DaoDonaciones.php';

	class ListaDonaciones{

		public function getListaDonaciones(){
			$dao = new DaoDonaciones();
			return ($dao->listaDonaciones());
		}

		public function insertaDonacion($donacion){
			$dao = new DaoDonaciones();
			return ($dao->addDonacion($donacion));
		}

		public function eliminaDonacion($id){
			$dao = new DaoDonaciones();
			return ($dao->borraDonacion($id));
		}

	}

?>