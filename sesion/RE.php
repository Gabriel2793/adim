<?php 
	require_once("conecta.php");
	$mycon = new conecta();
	$equipo = $_POST['nombreE'];
	$nint= $_POST['numIntegrantes'];
	$status = $_POST['status'];
	$iduni = $_POST['UNIVERSIDAD_idUniversidad'];
	$mycon -> query = "INSERT INTO EQUIPO (nombreE,numIntegrantes,status,UNIVERSIDAD_idUniversidad) VALUES('".$equipo."',".$nint.",'".$status."',".$iduni.")";
	$mycon->simple_query();



	header("location:../index.php");
 ?>