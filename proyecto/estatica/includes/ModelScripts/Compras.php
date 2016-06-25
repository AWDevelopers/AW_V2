<?php
	
	class Compra{
		private $idProducto;
		private $CIFOng;
		private $DNIUsuario;
		private $numProductos;

		function Compra($idProducto, $CIFOng, $DNIUsuario, $numProductos){
			$this->idProducto = $idProducto;
			$this->CIFOng = $CIFOng;
			$this->DNIUsuario = $DNIUsuario;
			$this->numProductos = $numProductos;
		}

		function getIdProducto(){return $this->idProducto;}
		function getDNIUsuario(){return $this->DNIUsuario;}
		function getCIFOng(){return $this->CIFOng;}
		function getNumProductos(){return $this->numProductos;}
	}
?>