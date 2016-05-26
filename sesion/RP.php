<?php 
  require_once("conecta.php");
  $mycon = new conecta();
  $num = $_POST['numPaca'];
  $status = $_POST['status'];
  $mycon -> query = "INSERT INTO PACA(numPaca,status) VALUES(".$num.",'".$status."')";
  $mycon->simple_query();
  header("location:../index.php");
 ?>