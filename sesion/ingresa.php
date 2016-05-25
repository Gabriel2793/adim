<?php 
	require_once ('conexion.php');
	session_start();

	$usuario=$_POST['usuario'];
	$password = $_POST['password'];

	$ingresa = $conexion->query("select * from usuario where usuario = '$usuario' and password='$password'");
	
	if($resultado = mysqli_fetch_array($ingresa)){
		$_SESSION['u_usuario']=$usuario;
		header("location:sesion.php");
		echo "conexion establecida";
	}else{
		header("location:../index.php");
		echo "conexion fallida";
	}
 ?>