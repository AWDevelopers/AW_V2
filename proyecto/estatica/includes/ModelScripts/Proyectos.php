<?php

	class Proyectos{

		private $idProyecto;
		private $cifOng;
		private $fechaCreacion;
		private $dineroNecesario;
		private $dineroAcumulado;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $imagen;
		private $numVoluntarios;
		private $fechaFin;

		function __construct($idProyecto, $cifOng, $fechaCreacion, $dineroNecesario, $dineroAcumulado, $nombre, $descripcionCorta, $descripcionLarga, $imagen, $numVoluntarios, $fechaFin){
			$this->idProyecto = $idProyecto;
			$this->cifOng = $cifOng;
			$this->fechaCreacion = $fechaCreacion;
			$this->dineroNecesario = $dineroNecesario;
			$this->dineroAcumulado = $dineroAcumulado;
			$this->nombre = $nombre;
			$this->descripcionCorta = $descripcionCorta;
			$this->descripcionLarga = $descripcionLarga;
			$this->imagen = $imagen;
			$this->numVoluntarios = $numVoluntarios;
			$this->fechaFin = $fechaFin;
		}


		public function getNombre(){return $this->nombre;}

		public function getCifOng(){return $this->cifOng;}

		public function getFechaCreacion(){return $this->fechaCreacion;}

		public function getDineroNecesario(){return $this->dineroNecesario;}

		public function getDineroAcumulado(){return $this->dineroAcumulado;}

		public function getDescripcionCorta(){return $this->descripcionCorta;}

		public function getDescripcionLarga(){return $this->descripcionLarga;}

		public function getImagen(){return $this->imagen;}

		public function getIdProyecto(){return $this->idProyecto;}

		public function getNumVoluntarios(){return $this->numVoluntarios;}

		public function getFechaFin(){return $this->fechaFin;}

		public function toJson(){
			return $json;
		}

		public function fromJson($json){
			return $proyecto;
		}

	}

?>