<!DOCTYPE html>
	<html>
		<head>
			<title>Arco</title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/mycss.css">
		</head>
		<body>
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

<div class="container">  
  <form class="contact" id="form1" action="" method="post">
    <h3>Registro de &Aacute;rbitro</h3>
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

<div class="container">  
  <form class="contact" id="form2" action="" method="post">
    <h3>Iniciar Sesi&oacute;n</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input placeholder="Universidad" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="text" tabindex="2" required>
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