<?php 
	require_once("conecta.php");
	$mycon = new conecta();
	$numPacas = $_POST['numPacas'];
	$fecha = $_POST['fecha'];
	$mycon -> query = "INSERT INTO PARTIDO (numPacas,fecha) VALUES(".$numPacas.",'".$fecha."')";
	$mycon->simple_query();
	header("location:../index.php");
 ?>