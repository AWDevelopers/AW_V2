<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorProyectos.php';
		$id = $_REQUEST['idProyecto'];
		header("Location: ../vistaProyecto.php?id=".$id);
		exit();

?>