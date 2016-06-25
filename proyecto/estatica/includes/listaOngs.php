<?php 
	
	class ListaOngs{
		private $lista;
		private $contador;

		public function ListaOngs(){
			$this->contador = 0;			
		}

		public function getNombre($i){
			return $this->lista[$i]->getNombre();
		}
		public function getCif($i){
			return $this->lista[$i]->getCif();
		}
		public function getDireccion($i){
			return $this->lista[$i]->getDireccion();
		}
		public function getEmail($i){
			return $this->lista[$i]->getEmail();
		}
		public function getUsuario($i){
			return $this->lista[$i]->getUsuario();
		}
		public function getTelefono($i){
			return $this->lista[$i]->getTelefono();
		}
		public function getOng($i){
			return $this->lista[$i];
		}
		public function getContador(){
			return $this->contador;
		}
		

		public function cargarProyectos(){
			include 'includes/config.php';
			include 'includes/ong.php';

			$sql = "SELECT * FROM ong";
			if($result = $connection->query($sql )){
				
				$nFilas = $result->num_rows;
				$this->contador = $nFilas;
				$result->close();
			}		

			for($i = 1; $i <= $this->contador; $i++){
				$this->listaOng[$i] = new ong($i);
			}
		

		}

	}

?>