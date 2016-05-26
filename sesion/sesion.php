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
					<li class="col-md-3" id="RE">Registrar Equipo</li>
					<li class="col-md-2" id="ra">Ver Calendario</li>
					<li class="col-md-3">Observaciones</li>
					<a href='cerrarS.php'><li class="col-md-2" id="is">Cerrar Sesi&oacute;n</li></a>
				</ul>
			</nav>
			<div class="container">
			<div class="row">
				<div class="col-md-6">
					<center>
				<img src="../images/logo.jpg" class="imagen">
				</center>
				</div>
				<div class="col-md-6">
					<center>
				<img src='../images/unam.jpg' class="imagen">
				</center>
				</div>
			</div>
		</div>
			<div class="container">  
  <form class="contact" id="form" action="sesion/RU.php" method="post">
    <h3>Registro de Equipo</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input name="nombreE" placeholder="Nombre equipo" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="numIntegrantes" placeholder="Numero de Integrantes" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="status" placeholder="Status" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <?php
      		echo "<input name='coloniaU' placeholder='".$_SESSION['u_usuario']."' type='text' tabindex='4' value='".$_SESSION['u_usuario']."' disabled required>";
      ?>
    </fieldset>
      <button type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/myjs.js"></script>
 </body>
 </html>