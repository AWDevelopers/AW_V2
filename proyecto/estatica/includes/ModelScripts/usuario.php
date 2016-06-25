<?php
	class Usuario
	{	
		
		private $DNI;
		private $nombre;
   		private $apellidos; 	
		private $direccion;
		private $cp; 
		private $usuario;
		private $pass;
		private $email;
		private $fechaNacimiento;
		private $avatar;
		private $sexo;
		private $telefono;
		private $tipo;

		/*Constructora de la clase por defecto*/
		function __construct($nombre,$dni,$apellidos,$direccion,$cp,$usuario,$pass,$email,$fecha,$avatar,$sexo,$telefono, $tipo){
			$this->DNI=$dni;
			$this->nombre=$nombre;  
	   		$this->apellidos=$apellidos;
			$this->direccion=$direccion;
			$this->cp=$cp; 
			$this->usuario=$usuario;
			$this->pass=$pass;
			$this->email=$email;
			$this->fechaNacimiento=$fecha;
			$this->avatar=$avatar;
			$this->sexo=$sexo;
			$this->telefono=$telefono;
			$this->tipo = $tipo;
		}
		
		public function getNombre(){ return $this->nombre;}
		
		public function getDNI(){ return $this->DNI;}
		
		public function getApellidos(){ return $this->apellidos;}
		
		public function getCP(){ return $this->cp;}
		
		public function getUsuario(){ return $this->usuario;}
		
		public function getPass(){ return $this->pass;}
		
		public function getEmail(){ return $this->email;}
		
		public function getFechaNacimiento(){ return $this->fechaNacimiento;}
		
		public function getAvatar(){ return $this->avatar;}
		
		public function getSexo(){ return $this->sexo;}
		
		public function getTelefono(){ return $this->telefono;}
		
		public function getDireccion(){ return $this->direccion;}
		
		public function getRol(){ return $this->tipo;}

		
	}
?>