<?php
	require_once '/../ModelScripts/Proyectos.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoProyectos{

		private $array;

		function listaProyectosVoluntarios(){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto WHERE fechaFin >= sysdate() ORDER BY fechaCreacion";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);
			}
		}

		function modificaProyecto($id, $nombre,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen,$numVoluntarios,$fechaFin){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE proyecto SET  dineroNecesario = '$dineroNecesario', nombre = '$nombre', descripcionLarga = '$descripcionLarga', descripcionCorta = '$descripcionCorta', imagen = '$imagen', numVoluntarios = '$numVoluntarios', fechaFin = '$fechaFin' WHERE idProyecto = '$id'";
			$con->query($sql) or die ($con->error);
		}

		function insertaProyecto($nombre,$cif,$dineroNecesario,$descripcionCorta,$descripcionLarga,$imagen, $numVoluntarios,$dineroAcumulado, $fechaFin){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "INSERT INTO proyecto(CIFOng, fechaCreacion, dineroNecesario, dineroAcumulado, nombre, descripcionLarga, descripcionCorta, imagen, numVoluntarios, fechaFin) VALUES ";
			$sql.= "('".$cif."', sysdate() , '".$dineroNecesario."', '".$dineroAcumulado."', '".$nombre."', '".$descripcionLarga."', '".$descripcionCorta."', '".$imagen."', '".$numVoluntarios."', '".$fechaFin."')";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			return ($num);
		}

		function restaVoluntarios($idProyecto, $numVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE proyecto SET numVoluntarios = (numVoluntarios-'$numVol') WHERE idProyecto = '$id'";
			$con->query($sql) or die ($con->error);
		}

		function sumaDineroAcumulado($idProyecto, $dinero){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE proyecto SET dineroAcumulado = (dineroAcumulado + '$dinero') WHERE idProyecto = '$id'";
			$con->query($sql) or die ($con->error);
		}

		function borraProyecto($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM proyecto WHERE idProyecto = '$idProyecto'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function seleccionaProyecto($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM proyecto WHERE idProyecto = '$idProyecto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Proyectos($lista['idProyecto'], $lista['CIFOng'], $lista['fechaCreacion'], $lista['dineroNecesario'], $lista['dineroAcumulado'], $lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen'], $lista['numVoluntarios'], $lista['fechaFin']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}

	}

?>