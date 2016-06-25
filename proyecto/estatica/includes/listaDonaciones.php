<?php 
	
	include 'includes/donacion.php';
	
	class ListaDonaciones{
		private $lista;
		private $contador;

		public function ListaOngs(){
			$this->contador = 0;			
		}

		public function getDonacionesId($i){
			return $this->lista[$i]->getDonacionesId();
		}
		public function getDniUsuario($i){
			return $this->lista[$i]->getDniUsuario();
		}
		public function getProyectoId($i){
			return $this->lista[$i]->getProyectoId();
		}
		public function getDonacion($i){
			return $this->lista[$i]->getDonacion();
		}
		
		public function cargarDonaciones(){
			include 'includes/config.php';
			include 'includes/donacion.php';

			$sql = "SELECT * FROM donaciones";
			if($result = $connection->query($sql )){
				
				$nFilas = $result->num_rows;
				$this->contador = $nFilas;
				$result->close();
			}		

			for($i = 1; $i <= $this->contador; $i++){
				$this->listaOng[$i] = new donacion($i);
			}
		

		}

	}

?>