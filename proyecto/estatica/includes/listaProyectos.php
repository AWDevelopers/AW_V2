<?php 
	
	class ListaProyectos{
		private $lista;
		private $contador;

		public function ListaProyectos(){
			$this->contador = 0;			
		}

		public function getNombre($i){
			return $this->lista[$i]->getNombre();
		}
		public function getDineroAcumulado($i){
			return $this->lista[$i]->getDineroAcumulado();
		}
		public function getDineroNecesario($i){
			return $this->lista[$i]->getDineroNecesario();
		}
		public function getDescripcionCorta($i){
			return $this->lista[$i]->getDescripcionCorta();
		
		}

		public function getProyecto($i){
			return $this->lista[$i];
		
		}
		public function getContador(){
			return $this->contador;
		}
		

		public function cargarProyectos(){
			include 'includes/config.php';
			include 'includes/proyecto.php';

			$sql = "SELECT * FROM proyecto";
			if($result = $connection->query($sql )){
				
				$nFilas = $result->num_rows;
				$this->contador = $nFilas;
				$result->close();
			}
			
			

			for($i = 1; $i <= $this->contador; $i++){
				$this->listaProductos[$i] = new proyecto($i);
			}
		

		}

	}

?>