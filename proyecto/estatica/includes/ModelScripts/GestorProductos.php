<?php
	require_once '/../DaoScripts/DaoProductos.php';
	class GestorProductos{
		private $dao;
		function __construct(){
			$this->dao = new DaoProductos();
		}

		public function cargarNombreONG($CIFOng){
			$CIFOng = htmlspecialchars(trim(strip_tags($CIFOng)));
			require_once 'includes/DaoScripts/DaoOngs.php';
			$daoOng = new DaoOngs();
			$ONG = $daoOng->seleccionaOng($CIFOng);
			return($ONG->getNombre());
		}

		public function cargarDatosProductoPorNombre(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorNombre();
			$array = new ArrayObject();
			
			for($i= 0; $i <(sizeof($lista)-1) ; $i++){
			
				
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}

		public function cargarDatosProductoPorPrecioMayor(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorPrecioMayor();
			$array = new ArrayObject();
			for($i= 0; $i <(sizeof($lista)-1) ; $i++){
				
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}

		public function cargarDatosProductoPorPrecioMenor(){
			$dao = new DaoProductos();
			$lista = $dao->cargarDatosProductoPorPrecioMenor();
			$array = new ArrayObject();
			for($i= 0; $i <(sizeof($lista)-1) ; $i++){
				
				$array->append(new Producto($lista[$i]['idProducto'], $lista[$i]['CIFOng'],$lista[$i]['stock'],$lista[$i]['precio'],$lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen']));
			}
			return $array;
		}
		
		public function getProducto($id){
			$id = htmlspecialchars(trim(strip_tags($id)));
			return ($this->dao->cargaProducto($id));
		}

	
		public function borrarProducto($id){
			$id = htmlspecialchars(trim(strip_tags($id)));
			$this->dao->borrarProducto($id);
		}

		public function insertaProducto($idProducto, $cif, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen){
			$idProducto= htmlspecialchars(trim(strip_tags($idProducto)));
        	$cif = htmlspecialchars(trim(strip_tags($cif)));
        	$stock= htmlspecialchars(trim(strip_tags($stock)));
        	$precio = htmlspecialchars(trim(strip_tags($precio)));
        	$nombre= htmlspecialchars(trim(strip_tags($nombre)));
        	$descripcionCorta= htmlspecialchars(trim(strip_tags($descripcionCorta)));
        	$descripcionLarga= htmlspecialchars(trim(strip_tags($descripcionLarga)));
        	$imagen = htmlspecialchars(trim(strip_tags($imagen)));
			$this->dao->insertaProducto($idProducto, $cif, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen);
		}
      
        public function modificaNombreProducto($idProducto, $nombre){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$nombre = htmlspecialchars(trim(strip_tags($nombre)));
        	$this->dao->modificaNombreProducto($idProducto, $nombre);
        }
		
        public function modificaPrecioProducto($idProducto, $precio){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$precio = htmlspecialchars(trim(strip_tags($precio)));
        	$this->dao->modificaPrecioProducto($idProducto, $precio);
        }

        public function modificaStockProducto($idProducto, $unidades){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$unidades = htmlspecialchars(trim(strip_tags($unidades)));
        	$this->dao->modificaStockProducto($idProducto, $unidades);
        }

        public function modificaNumeroProducto($idProducto, $unidades){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$unidades = htmlspecialchars(trim(strip_tags($unidades)));
        	$this->dao->modificaNumeroProducto($idProducto, $unidades);
        }

        public function modificaDCortaProducto($idProducto, $DCorta){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$DCorta = htmlspecialchars(trim(strip_tags($DCorta)));
        	$this->dao->modificaDCortaProducto($idProducto, $DCorta);
        }

        public function modificaDLargaProducto($idProducto, $DLarga){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$DLarga = htmlspecialchars(trim(strip_tags($DLarga)));
        	$this->dao->modificaDLargaProducto($idProducto, $DLarga);
        }

         public function modificaImagenProducto($idProducto, $imagen){
        	$id= htmlspecialchars(trim(strip_tags($idProducto)));
        	$imagen = "img/".htmlspecialchars(trim(strip_tags($imagen)));
        	$this->dao->modificaImagenProducto($idProducto, $imagen);
        }
        
	}

?>
