<?php
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	include ('config.php');
	require_once 'ModelScripts/GestorProductos.php';
	require_once 'ModelScripts/GestorCompras.php';

	$prod = new GestorProductos();
	$prod->modificaStockProducto($_POST['idProducto'], $_POST['quantity']);

	$compra = new GestorCompras();
	$compra->nuevaCompra($_POST['idProducto'], $_POST['CIFOng'], $_POST['quantity']);
?>