<?php
	require_once '/../ModelScripts/donacion.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoDonaciones{

		private $array;

		public function listaDonaciones(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$consulta = "SELECT * FROM donaciones";
			$rs = $con->query($consulta) or die ($con->error);

			if($rs != NULL){
				while($lista = $rs->fetch_assoc()){
					$array->append(new Donaciones($lista['donaciones_id'], $lista['DNIUsuario'], $lista['idProyecto'], $lista['donacion']));
				}
				$rs->free();
				return $array;
			}
		}

		public function addDonacion($dni, $id, $dinero){
			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			//Añado la nueva donacion a la tabla donaciones
			$consulta = "INSERT INTO donaciones(DNIUsuario, idProyecto, donacion) VALUES ('$dni', '$id', '$dinero')";
			$connection->query($consulta) or die($connection->error);
			//echo $dni;
			//Actualizo el proyecto añadiendo la nueva donacion
			$consulta2 = "UPDATE proyecto SET dineroAcumulado = (dineroAcumulado + '$dinero') WHERE idProyecto = '$id'";
			$connection->query($consulta2) or die($connection->error);
			//$rs->free();
		}

		public function borraDonacion($id){
			$con = createConnection();
			$consulta = "DELETE FROM donaciones WHERE idProyecto = '$id'";
			$con->query($consulta) or die ($con->error);
		}
	}
?>