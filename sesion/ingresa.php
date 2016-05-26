<?php 
	require_once ('conexion.php');
	session_start();

	$usuario=$_POST['usuario'];
	$password = $_POST['password'];

	$ingresa = $conexion->query("select * from UNIVERSIDAD where nombreU = '$usuario' and password='$password'");
	
	if($resultado = mysqli_fetch_array($ingresa)){
		$_SESSION['u_usuario']=$usuario;
		$ingresa->close();
		if(substr($_SESSION['u_usuario'], 3)==="ARB"){
        header("location:sesion/sesionARB.php");
      }else{
        header("location:sesion/sesion.php");
      }
	}else{
		$ingresa->close();
		header("location:../index.php");
	}
 ?>