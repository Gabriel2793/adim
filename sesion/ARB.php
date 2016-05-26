<?php 
  require_once("conecta.php");
  $mycon = new conecta();
  $nombre = $_POST['nombreA'];
  $direccion = $_POST['direccion'];
  $email = $_POST['correo'];
  $mycon -> query = "INSERT INTO ARBITRO (nombreA,direccion,correo) VALUES('".$nombre."','".$direccion."','".$email."')";
  $mycon->simple_query();
  header("location:../index.php");
 ?>