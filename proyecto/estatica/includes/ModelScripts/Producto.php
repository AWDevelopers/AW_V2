<?php
	
	class Producto{
		private $idProducto;
		private $stock;
		private $precio;
		private $nombre;
		private $descripcionCorta;
		private $descripcionLarga;
		private $CIFOng;
		private $rutaImagen;

		function Producto($idProducto, $CIFOng, $stock, $precio, $nombre, $descCorta, $descLarga, $rutaImagen){
			$this->idProducto = $idProducto;
			$this->stock = $stock;
			$this->precio = $precio;
			$this->nombre = $nombre;
			$this->descripcionCorta = $descCorta;
			$this->descripcionLarga = $descLarga;
			$this->CIFOng = $CIFOng;
			$this->rutaImagen = $rutaImagen;
		}

		public function getIdProducto(){
			return $this->idProducto;
		}
		
		public function getNombreProducto(){
			return $this->nombre;
		}
		public function getPrecioProducto(){
			return $this->precio;
		}
		public function getstockProducto(){
			return $this->stock;
		}
		public function getCifONGProducto(){
			return $this->CIFOng;
		}
		public function getDescLargaProducto(){
			return $this->descripcionLarga;
		}
		public function getDescCortaProducto(){
			return $this->descripcionCorta;
		}
		public function getImagen(){
			return $this->rutaImagen;
		}


		

		
	}


?>
