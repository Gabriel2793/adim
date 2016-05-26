<!DOCTYPE html>
	<html>
		<head>
			<title>Arco</title>
			<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../css/mycss.css">
		</head>
		<body>
      <?php 

    session_start();
    //substr($_SESSION['u_usuario'], 3)
    if(isset($_SESSION['u_usuario'])){
      if($_SESSION['u_usuario'] === "ADM"){
        header("location:sesion/ADM.php");
      }else{
        header("location:sesion/sesion.php");
      }
    }
    ?>  
			<div class="container">
				<center><img src="images/3darchery.jpg" id="im2"></center>
			</div>
			<div class="container">
			<nav class="container">
				<ul class="row">
					<li class="col-md-2" id="RE">Registrar Equipo</li>
					<li class="col-md-2" id="RA">Registrar alumno</li>
					<li class="col-md-2" id="RC">Ver Calendario</li>
					<li class="col-md-2" id="verE">Ver Equipos</li>
					<a href='cerrarS.php' ><li class="col-md-3" >Cerrar Sesi&oacute;n</li></a>
				</ul>
			</nav>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<center>
				<img src="../images/logo.jpg" class="imagen">
				</center>
				</div>
				<div class="col-md-6">
					<center>
				<img src='../images/arb.jpg' class="imagen">
				</center>
				</div>
			</div>
		</div>
		<script src="../js/jquery.js"></script>
<script src="../js/myjs.js"></script>
</body>
</html>