<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorNoticias.php';
		$id = $_REQUEST['id'];
		header("Location: ../vistaNoticiaDetallada.php?id=".$id);
		exit();

?>