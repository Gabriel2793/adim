 <html>
 <head>
 	<title>Sesion</title>
 	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../css/mycss.css">
 </head>
 <body>
 	<?php 

		session_start();
		if(isset($_SESSION['u_usuario'])){
		}else{
			header("location:../index.php");
		}
 	?>	

 	<div class="container">
				<center><img src="../images/3darchery.jpg" id="im2"></center>
			</div>
			<nav class="container">
				<ul class="container">
					<li class="col-md-1" id="h">Home</li>
					<li class="col-md-3" id="ru">Registrar Equipo</li>
					<li class="col-md-2" id="ra">Ver Calendario</li>
					<li class="col-md-3">Observaciones</li>
					<a href='cerrarS.php'><li class="col-md-2" id="is">Cerrar Sesi&oacute;n</li></a>
				</ul>
			</nav>
			<div class="container">
				<center>
						<img src="../images/logo.jpg" class="imagen col-mid-6">
						<?php 

							if($_SESSION['u_usuario']=='UNAM'){
								echo "<img src='../images/unam.jpg' class='imagen col-md-6'>";
							}else{
								echo "<img src='../images/Desconocido.png' class='imagen col-md-6'>";
							}

						 ?>
				</center>
			</div>
<script src="../js/jquery.js"></script>
<script src="../js/myjs.js"></script>
 </body>
 </html>