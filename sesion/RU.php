<?php 
	require_once("conecta.php");
	$mycon = new conecta();
	$uni = $_POST['nombreU'];
	$state = $_POST['estado'];
	$street = $_POST['calleU'];
	$colon = $_POST['coloniaU'];
	$delega = $_POST['delegacionU'];
	$pass = $_POST['password'];
	$mycon -> query = "INSERT INTO UNIVERSIDAD (nombreU,estado,calleU,coloniaU,delegacionU,password) VALUES('".$uni."','".$state."','".$street."','".$colon."','".$delega."','".$pass."')";
	$mycon->simple_query();
	header("location:../index.php");
 ?>