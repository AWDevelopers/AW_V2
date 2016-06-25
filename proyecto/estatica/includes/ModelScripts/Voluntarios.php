<?php

	class Voluntario{

		private $idProyecto;
		private $dniUsuario;
		private $dia;
		private $horaEntrada;
		private $horaSalida;

		function __construct($idProyecto, $dniUsuario, $dia, $horaEntrada, $horaSalida){
			$this->idProyecto = $idProyecto;
			$this->dniUsuario = $dniUsuario;
			$this->dia = $dia;
			$this->horaEntrada = $horaEntrada;
			$this->horaSalida = $horaSalida;
		}

		public function getIdProyecto(){ return $this->idProyecto;}
		public function getDniUsuario(){ return $this->dniUsuario;}
		public function getDia(){ return $this->dia;}
		public function getHoraEntrada(){ return $this->horaEntrada;}
		public function getHoraSalida(){ return $this->horaSalida;}


	}

?>