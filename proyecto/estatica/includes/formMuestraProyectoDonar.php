<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorProyectos.php';
		$id = $_REQUEST['idProyecto'];
		$dineroAcumulado = $_REQUEST['dineroAcumulado'];
		header("Location: ../donaciones.php?id=".$id."&dineroAcumulado=".$dineroAcumulado);
		exit();

?>