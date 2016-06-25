<?php
	require_once '/../ModelScripts/Voluntarios.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoVoluntarios{

		function listaVoluntarios($dniUsuario){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$array = new ArrayObject();
			$sql = "SELECT * FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);	
			}
		}

		function sumHorasVoluntario($dniUsuario){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$array = new ArrayObject();
			$sql = "SELECT horaEntrada, horaSalida FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				$con->close();
				return ($lista);	
			}
		}

		function insertaVoluntario($idProyecto,$dniUsuario,$dia,$horaEntrada,$horaSalida){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "INSERT INTO voluntarios(idProyecto, DNIUsuario, dia, horaEntrada, horaSalida) VALUES ";
			$sql.= "('".$idProyecto."', '".$dniUsuario."', '".$dia."', '".$horaEntrada."', '".$horaSalida."')";
			$con->query($sql) or die ($con->error);
			$num = $con->insert_id;
			$con->close();
			return ($num);
		}

		function borraVoluntario($idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM voluntarios WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarHoraEntrada($horaEntrada, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaEntrada = '$horaEntrada') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarHoraSalida($horaSalida, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaSalida = '$horaSalida') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function modificarDia($dia, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (dia = '$dia') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		function seleccionaVoluntarios($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios WHERE idProyecto = '$idProyecto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Voluntario($lista['idProyecto'], $lista['DNIUsuario'], $lista['dia'], $lista['horaEntrada'], $lista['horaSalida']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}


		function seleccionaVoluntariosONG($cifOng){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios v JOIN proyecto p WHERE 'p.CIFOng = '$cifOng'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Voluntario($lista['idProyecto'], $lista['DNIUsuario'], $lista['dia'], $lista['horaEntrada'], $lista['horaSalida']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}
		
		function seleccionaVoluntariosUsuario($dniUsuario){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Voluntario($lista['idProyecto'], $lista['DNIUsuario'], $lista['dia'], $lista['horaEntrada'], $lista['horaSalida']);
				}
				$rs->free();
				$con->close();
				return ($resultado);
			}
		}
	}

?>