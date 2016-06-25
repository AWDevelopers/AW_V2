<?php

	class GestorProyectos{

		private $dao;
		function __construct(){
			require_once '/../DaoScripts/DaoProyectos.php';
			require_once '/../DaoScripts/DaoOngs.php';
			$this->dao = new DaoProyectos();
		}
		public function getListaProyectosVoluntarios(){
			$lista = $this->dao->listaProyectosVoluntarios();
			$array = new ArrayObject();
			for($i= 0; $i <sizeof($lista)-1 ; $i++){
			$array->append(new Proyectos($lista[$i]['idProyecto'], $lista[$i]['CIFOng'], $lista[$i]['fechaCreacion'], $lista[$i]['dineroNecesario'], $lista[$i]['dineroAcumulado'], $lista[$i]['nombre'], $lista[$i]['descripcionCorta'], $lista[$i]['descripcionLarga'], $lista[$i]['imagen'],$lista[$i]['numVoluntarios'],$lista[$i]['fechaFin']));
			}
			return $array;
		}

		public function getProyecto($id){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($id)));
			return ($this->dao->seleccionaProyecto($id));
		}

		public function eliminarProyecto($id){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($id)));
			return ($this->dao->borraProyecto($id));
		}

		public function modificaProyecto($id, $nombre,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin){
			 //$this->retiraEtiquetas($id); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP */
			htmlspecialchars(trim(strip_tags($id)));
			htmlspecialchars(trim(strip_tags($nombre)));
			htmlspecialchars(trim(strip_tags($dineroNecesario)));
			htmlspecialchars(trim(strip_tags($descripcionCorta)));
			htmlspecialchars(trim(strip_tags($descripcionLarga)));
			htmlspecialchars(trim(strip_tags($imagen)));
			htmlspecialchars(trim(strip_tags($numVoluntarios)));
			htmlspecialchars(trim(strip_tags($fechaFin)));
			return ($this->dao->modificaProyecto($id, $nombre,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin));
		}
		/*private function retiraEtiquetas(&$columns) {
		    foreach ($columns as $n) {
		       $n=htmlspecialchars(trim(strip_tags($n)));
		    }
		} */
		public function nuevoProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios, $fechaFin){
		//$this->retiraEtiquetas($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios, $fechaFin); //LIMPIAMOS DE ETIQUETAS HTMLS Y PHP
			htmlspecialchars(trim(strip_tags($nombre)));
			htmlspecialchars(trim(strip_tags($cif)));
			htmlspecialchars(trim(strip_tags($dineroNecesario)));
			htmlspecialchars(trim(strip_tags($descripcionCorta)));
			htmlspecialchars(trim(strip_tags($descripcionLarga)));
			htmlspecialchars(trim(strip_tags($imagen)));
			htmlspecialchars(trim(strip_tags($numVoluntarios)));
			htmlspecialchars(trim(strip_tags($fechaFin)));
 			$daoO = new DaoOngs();
			$end_time   =   strtotime($fechaFin);
			$cur_time   =   strtotime("now");
			$dineroAcumulado = 0;
			if($imagen == "img/")
				$imagen += "imagen.png";
			if($end_time > $cur_time){
				//if($daoO->seleccionaOng($cif) != ""){
					return ($this->dao->insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado,$fechaFin));
				//}
			}
			return null;
		}

		
	}

?>