<?php
	require_once '/../ModelScripts/noticia.php';
	require_once '/../config.php';
    use \AW\proyecto\estatica\includes\Aplicacion as App;
	class DaoNoticias{
		private $array;
		
		function listaNoticias(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia");
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
                            while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}

		function listaNoticiasPrimarias(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='primaria'");
			$rs = $con->query($sql) or die ($con->error);
			if($rs->num_rows > 0)
			{
                            while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}
		
		function listaNoticiasSecundarias(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE tipo='secundaria'");
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs->num_rows > 0)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}
		
		function listaNoticiasTerciarias(){
			$app = App::getSingleton();
             $con = $app->conexionBd();

			$sql = sprintf("SELECT * FROM noticia WHERE tipo='terciaria'");
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs->num_rows > 0)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}
		
		function listaNoticiasOtras(){
			$app = App::getSingleton();
            $con = $app->conexionBd();

			$sql = sprintf("SELECT * FROM noticia WHERE tipo='otras'");
			$rs = $con->query($sql) or die ($con->error);
			/**/
			if($rs != NULL)
			{
				while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}
		
		
		function insertaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga, $imagen){
            $app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = "INSERT INTO noticia (titulo,tipo,descripcionCorta,descripcionLarga,fecha, imagen) VALUES ";
			$sql.= "('".$titulo."', '".$tipo."', '".$descripcionCorta."', '".$descripcionLarga."', sysdate() , '".$imagen."')";
			$con->query($sql) or die ($con->error);
            $num = $con->insert_id;
			$con->close();
			return ($num);
        
		}
                
		function existeNoticia($titulo){
			$app = App::getSingleton();
			$con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM noticia WHERE titulo='%s'", $con->real_escape_string($titulo));
			$rs = $con->query($sql) or die ($con->error);
			$num = $rs->num_rows;
			return $num;        
		}
		
		function eliminaNoticia($idNoticia){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
			$sql = "DELETE FROM noticia WHERE id = '$idNoticia'";
			$con->query($sql) or die ($con->error);
                        $con->close();
		}
		
		function seleccionaNoticia($id){
			$app = App::getSingleton();
                        $con = $app->conexionBd();
                        $sql = sprintf("SELECT * FROM noticia WHERE id='%s'", $con->real_escape_string($id));
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					$resultado =  new Noticia($lista['id'], $lista['titulo'], $lista['tipo'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['fecha'], $lista['imagen']);
				}
				$rs->free();
                                $con->close();
				return ($resultado);
			}
		}
		
		function editaNoticia($idN,$tituloN, $tipoN , $desC, $desL, $imagenN){
		$app = App::getSingleton();
        $con = $app->conexionBd();
        $sql = "UPDATE noticia SET titulo='$tituloN', tipo= '$tipoN', descripcionCorta='$desC', descripcionLarga='$desL', imagen='$imagenN' WHERE id='$idN'";
		$rs = $con->query($sql) or die ($con->error);
		
		}
		
		
		
	}
?>	

