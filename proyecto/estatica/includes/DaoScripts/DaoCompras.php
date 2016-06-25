<?php
	require_once '/../ModelScripts/Compras.php';
	require_once '/../config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;

	class DaoCompras{
		private $array;
		public function insertaCompra($idProducto, $CIFOng, $numProductos){
			$app = App::getSingleton();
    		$connection = $app->conexionBd();
    		$dni = App::dniUsuario();
			$consulta = "INSERT INTO compras(idProducto, CIFOng, DNIUsuario, numProductos) VALUES ('$idProducto', '$CIFOng', '$dni', '$numProductos')";
			
			$connection->query($consulta);
			
			
		}


	}

?>