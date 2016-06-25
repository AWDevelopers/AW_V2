<?php
	require_once '/../ModelScripts/Producto.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class DaoProductos{
		
		private $listaProductos;


		function cargarDatosProductoPorNombre(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY nombre ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					
					return ($lista);	
			}
			
		}

		

		function cargarDatosProductoPorPrecioMayor(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY precio desc ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					
					return ($lista);	
			}
			
		
		}

		function cargarDatosProductoPorPrecioMenor(){

			$app = App::getSingleton();
    		$connection = $app->conexionBd();
			$sql = "SELECT * FROM Producto ORDER BY precio asc ";
			$rs = $connection->query($sql) or die ($connection->error);


			if($rs != NULL){
				while($lista[] = $rs->fetch_assoc());

					$rs->free();
					
					return ($lista);	
			}
			
		
		}

		function cargaProducto($idProducto){
			
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "SELECT * FROM producto WHERE idProducto = '$idProducto'";
			$rs = $con->query($sql) or die ($con->error);
			$resultado = "";
			if($rs != NULL)
			{
				while($lista = $rs->fetch_assoc()){
					
					$resultado =  new Producto($lista['idProducto'], $lista['CIFOng'],$lista['stock'],$lista['precio'],$lista['nombre'], $lista['descripcionCorta'], $lista['descripcionLarga'], $lista['imagen']);
				}
				$rs->free();
				//$con->close();
				return ($resultado);
			}
		}

		function insertaProducto($idProducto, $CIFOng, $stock, $precio, $nombre,$descripcionCorta, $descripcionLarga, $imagen){
			$app = App::getSingleton();
    		$con = $app->conexionBd();

    		$sql = "INSERT INTO producto(idProducto, stock, precio, nombre,descripcionCorta, descripcionLarga, CIFOng, imagen) VALUES (NULL, '$stock','$precio', '$nombre','$descripcionCorta', '$descripcionLarga', '$CIFOng', '$imagen')";
			$con->query($sql) or die ($con->error);
			//$num = $con->insert_id;
			$con->close();
			//return ($num);
		}

		function borrarProducto($id){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql = "DELETE FROM producto WHERE idProducto = '$id'";
			$con->query($sql) or die ($con->error);
			$con->close();
		}

		
		function modificaStockProducto($idProducto, $unidades){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET stock = (stock - '$unidades') WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}

			function modificaNumeroProducto($idProducto, $unidades){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET stock = '$unidades' WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}


		function modificaNombreProducto($idProducto, $nombre){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET nombre = '$nombre' WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}

		function modificaPrecioProducto($idProducto, $precio){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET precio = '$precio' WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}

		function modificaDLargaProducto($idProducto, $dLarga){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET descripcionLarga = '$dLarga' WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}

		function modificaDCortaProducto($idProducto, $dCorta){
			$app = App::getSingleton();
    		$con = $app->conexionBd();
			$sql =  "UPDATE producto SET descripcionCorta = '$dCorta' WHERE idProducto = '$idProducto'";
			$con->query($sql) or die ($con->error);
			
		}

		public function listaOngs(){
			$app = App::getSingleton();
            $con = $app->conexionBd();
			$sql = sprintf("SELECT * FROM producto");
			$rs = $con->query($sql) or die ($con->error);
			if($rs != NULL)
			{
                            while($lista[] = $rs->fetch_assoc());
				$rs->free();
				return ($lista);
			}
		}
 	}

 ?>