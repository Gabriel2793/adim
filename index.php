<!DOCTYPE html>
	<html>
		<head>
			<title>Arco</title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/mycss.css">
		</head>
		<body>
      <?php 

    session_start();
    if(isset($_SESSION['u_usuario'])){
      header("location:sesion/sesion.php");
    }
    ?>  
			<div class="container">
				<center><img src="images/3darchery.jpg" id="im2"></center>
			</div>
			<nav class="container">
				<ul class="container">
					<li class="col-md-1" id="h">Home</li>
					<li class="col-md-3" id="ru">Registrar Universidad</li>
					<li class="col-md-2" id="ra">Registrar &aacute;rbitro</li>
					<li class="col-md-3">Registrar alumno</li>
					<li class="col-md-2" id="is">Iniciar Sesi&oacute;n</li>
				</ul>
			</nav>
			<div class="container">  
  <form class="contact" id="form" action="" method="post">
    <h3>Registro de Universidad</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input placeholder="Universidad" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Direccion" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telefono" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Correo" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Director" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>


<!-- Arbitro -->


<div class="container">  
  <form class="contact" id="form1" action="" method="post">
    <h3>Registro de &Aacute;rbitro</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <b>Nombre: <input placeholder="Nombre" type="text" tabindex="1" required autofocus></b>
    </fieldset>
    <fieldset>
      <b>Direcci&oacute;n: <input placeholder="Direccion" type="text" tabindex="2" required></b>
    </fieldset>
    <fieldset>
      <b>Telefono: <input placeholder="Telefono" type="tel" tabindex="3" required></b>
    </fieldset>
    <fieldset>
      <b>Correo: <input placeholder="Correo" type="email" tabindex="4" required></b>
    </fieldset>
    <fieldset>
      <b>Usuario<input placeholder="Usuario" type="text" required></input></b>
    </fieldset>
    <fieldset>
      <b>Contrase&ntilde;a<input placeholder="Usuario" type="text" required></input></b>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>

<!--Sesion-->

<div class="container">  
  <form class="contact" id="form2" action="sesion/ingresa.php" method="post">
    <h3>Iniciar Sesi&oacute;n</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input name='usuario' placeholder="Universidad" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name='password' id="password" placeholder="Password" type="password" tabindex="2" size="10px" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>
<center><img src="images/logo.jpg" id="imagen"></center>
<script src="js/jquery.js"></script>
<script src="js/myjs.js"></script>
		</body>
	</html>