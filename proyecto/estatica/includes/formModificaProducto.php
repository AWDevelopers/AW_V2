<?php
	include ('config.php');
	if (!isset($_SESSION)) session_start();
		require_once 'ModelScripts/GestorProductos.php';
		use \AW\proyecto\estatica\includes\Aplicacion as App;
		$app = App::getSingleton();
		if($app->usuarioLogueado() && $app->tieneRol("Admin")){
			$producto = new GestorProductos();
			$idProducto = $_REQUEST['id'];
			$nombre =$_REQUEST['nombre'];
			$precio = $_REQUEST['precio'];
			$descripcionCorta = $_REQUEST['descripcionCorta'];
			$descripcionLarga = $_REQUEST['descripcionLarga'];
			$stock = $_REQUEST['stock'];
			$imagen = $_REQUEST['imagen'];
			$producto->modificaNombreProducto($idProducto,$nombre);
			$producto->modificaPrecioProducto($idProducto,$precio);
			$producto->modificaDCortaProducto($idProducto,$descripcionCorta);
			$producto->modificaDLargaProducto($idProducto,$descripcionLarga );
			$producto->modificaNumeroProducto($idProducto, $stock );
			$producto->modificaImagenProducto($idProducto, $imagen );
		header("Location: ../vistaAdminProductos.php");
		exit();
		}
	

?>