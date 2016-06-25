<?php

	require_once '/../DaoScripts/DaoOngs.php';

	class ListaOngs{

		public function getListaOngs(){
			$dao = new DaoOngs();
			return ($dao->listaOngs());
		}

		public function getOng($cif){
			$dao = new DaoOngs();
			return ($dao->seleccionaOng($cif));
		}

		public function insertaOng($ong){
			$dao = new DaoOngs();
			return ($dao->addOng($ong));
		}

		public function borraOng($cif){
			$dao = new DaoOngs();
			return ($dao->deleteOng($cif));
		}

		public function modificaUsuario($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyUsuario($nuevo, $actual));
		}

		public function modificaPass($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyPass($nuevo, $actual));
		}

		public function modificaNombre($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyNombre($nuevo, $actual));
		}

		public function modificaCif($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyCif($nuevo, $actual));
		}

		
		public function modificaDireccion($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyDireccion($nuevo, $actual));
		}

		public function modificaEmail($nuevo, $actual){
			$dao = new DaoOngs();
			return ($dao->modifyEmail($nuevo, $actual));
		}
	}

?>