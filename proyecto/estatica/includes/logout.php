<?php
	require_once 'config.php';
	use \AW\proyecto\estatica\includes\Aplicacion as App;
	$app = App::getSingleton();
	$app->logout();
	header("Location: ../index.php");
?>