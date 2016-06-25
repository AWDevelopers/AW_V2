<?php

	class Donacion{
		
		private $iddonacion;
		private $dniusuario;
		private $idproyecto;
		private $cantidad;

		/*---------------- CONSTRUCTORA ------------------*/
		function __construct($dniusuario, $idproyecto, $cantidad){
			$this->dniusuario=$dniusuario;
			$this->idproyecto=$idproyecto;
			$this->cantidad=$cantidad;
		}

		/*-----------------MÉTODOS GET --------------------*/
		public function getDonacionesId(){
			return $this->iddonacion;
		}
		public function getDniUsuario(){
			return $this->dniusuario;
		}
		public function getProyectoId(){
			return $this->idproyecto;
		}
		public function getDonacion(){
			return $this->cantidad;
		}
	}
?>