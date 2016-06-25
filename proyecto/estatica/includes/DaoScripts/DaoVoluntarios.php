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
			return ($num);
		}

		function borraVoluntario($idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM voluntarios WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
		}

		function modificarHoraEntrada($horaEntrada, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaEntrada = '$horaEntrada') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
		}

		function modificarHoraSalida($horaSalida, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (horaSalida = '$horaSalida') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
		}

		function modificarDia($dia, $idVol){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "UPDATE FROM voluntarios SET (dia = '$dia') WHERE idVoluntariado = '$idVol'";
			$con->query($sql) or die ($con->error);
		}

		function seleccionaVoluntarios($idProyecto){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios WHERE idProyecto = '$idProyecto'";
			$rs = $con->query($sql) or die ($con->error);
			$lista = "";
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
			}
			return ($lista);
		}


		function seleccionaVoluntariosONG($cifOng){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios v JOIN proyecto p WHERE 'p.CIFOng = '$cifOng'";
			$rs = $con->query($sql) or die ($con->error);
			$lista = "";
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
			}
			return ($lista);
		}
		
		function seleccionaVoluntariosUsuario($dniUsuario){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM voluntarios WHERE DNIUsuario = '$dniUsuario'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			$lista = "";
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
			}
			return ($lista);
		}
	}

?>