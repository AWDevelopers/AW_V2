<?php
include ('config.php');
if (!isset($_SESSION)) session_start();
require_once 'ModelScripts/GestorNoticias.php';
    $lista = new GestorNoticias();
    $titulo = $_REQUEST['titulo'];
    $tipo = $_REQUEST['tipo'];
	$descripcionCorta = $_REQUEST['descripcionCorta'];
	$descripcionLarga = $_REQUEST['descripcionLarga'];
	$imagen = "img/".$_REQUEST['imagen'];
	$salida = $lista->nuevaNoticia($titulo, $tipo , $descripcionCorta, $descripcionLarga,$imagen);
	header("Location: ../vistaNoticiaDetallada.php?id=".$salida);
?>