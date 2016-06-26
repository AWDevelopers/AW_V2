<?php

use \AW\proyecto\estatica\includes\Aplicacion as App;
include ('config.php');

//$funcion = $_REQUEST['donacion'];

//switch($funcion){
//	case 'Hacer Donación':
		
		$dni = $_POST['dni'];
		$id = $_POST['pid'];
		$dinero = $_POST['cantidad'];


		$app = App::getSingleton();

    	if($app->usuarioLogueado()){
    		require_once 'ModelScripts/GestorDonaciones.php';
			$donacion = new GestorDonaciones();
			
			$donacion->addDonacion($dni, $id, $dinero);
			
			header("Location: ../procesarDonacion.php");
			exit();
    	}
		
		
//}

?>