<?php 
	require_once ('conexion.php');
	session_start();

	$usuario=$_POST['usuario'];
	$password = $_POST['password'];

	$ingresa = $conexion->query("select * from administrador where usuario = '$usuario' and password='$password'");
	
	if($resultado = mysqli_fetch_array($ingresa)){
		$_SESSION['u_usuario']=$usuario;
		$ingresa->close();
        header("location:ADM.php");
	}else{
		$ingresa->close();
		header("location:../index.php");
	}
 ?>