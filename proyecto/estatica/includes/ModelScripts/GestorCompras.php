<?php

	require_once '/../DaoScripts/DaoCompras.php';
	class GestorCompras{

		private $dao;
		function __construct(){
			$this->dao = new DaoCompras();
		}
		

		public function getProyecto($id){
			return ($this->dao->seleccionaProyecto($id));
		}

		public function nuevaCompra($idProducto, $CIFOng, $numProductos){
			$idP = htmlspecialchars(trim(strip_tags($idProducto)));
			$cif= htmlspecialchars(trim(strip_tags($CIFOng)));
			$n = htmlspecialchars(trim(strip_tags($numProductos)));

			$this->dao->insertaCompra($idP, $cif,  $n);
			

			$prod = new GestorProductos();
			$prod->modificaStockProducto($_POST['idProducto'], $_POST['quantity']);
		}

		
	}

?>