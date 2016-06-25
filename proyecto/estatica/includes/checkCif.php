<?php
sleep(1);
include('config.php');
require_once 'ModelScripts/GestorOngs.php';
    $cif = $_REQUEST['cif'];
    $gestor = new GestorOngs();
    $salida = $gestor->seleccionaOng($cif);
	if($salida != "")
	{
		 echo '<div id="Error">CIF correcto</div>';
	}
	else{
		echo '<div id="Success">CIF no encontrado</div>';
	}
?>