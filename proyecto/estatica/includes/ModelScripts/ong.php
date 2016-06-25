<?php
	
	class Ong{
		private $cif;
		private $nombre;
		private $direccion;
		private $email;
		private $usuario;
		private $pass;
		private $telefono;
		private $imagen;

		/*---------------- CONSTRUCTORA ---------------------------------*/

		function __construct($cif, $nombre, $direccion, $email, $usuario, $pass, $telefono, $imagen){
			$this->cif = $cif;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->email = $email;
			$this->usuario = $usuario;
			$this->pass = $pass;
			$this->telefono = $telefono;
			$this->imagen = $imagen;
			
		}

		/*----------------- MÉTODOS GET --------------------*/

		public function getCif(){ return $this->cif; }		
		
		public function getNombre(){ return $this->nombre;}
		
		public function getDireccion(){ return $this->direccion; }
		
		public function getEmail(){ return $this->email; }
		
		public function getUsuario(){ return $this->usuario; }
		
		public function getPass(){ return $this->pass; }
		
		public function getTelefono(){ return $this->telefono; }
		
		public function getImagen(){ return $this->imagen; }
		

	}
?>

	