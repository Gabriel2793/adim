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
			<nav class="container">
				<ul class="container">
					<li class="col-md-1" id="h">Home</li>
					<li class="col-md-3" id="ru">Registrar Universidad</li>
					<li class="col-md-2" id="ra">Registrar &aacute;rbitro</li>
					<li class="col-md-3" id="RP">Registrar Pacas</li>
					<li class="col-md-2" id="is">Iniciar Sesi&oacute;n</li>
				</ul>
			</nav>

      <!-- Universidad -->
			<div class="container">  
  <form class="contact" id="form" action="sesion/RU.php" method="post">
    <h3>Registro de Universidad</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input name="nombreU" placeholder="Universidad" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="estado" placeholder="Estado" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="calleU" placeholder="Calle" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="coloniaU" placeholder="Colonia" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input name="delegacionU" type="text" placeholder="Delegaci&oacute;n" tabindex="5" required></input>
    </fieldset>
    <fieldset>
      <input name="password" type="password" placeholder="password" class="password" tabindex="5" required></input>
    </fieldset>
    <fieldset>
      <button type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>

<!-- Administrador-->


<div class="container">  
  <form class="contact" id="form8" action="sesion/ingresaA.php" method="post">
    <h3>Inisiar sesion administrador</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <b>Usuario: <input name="usuario" placeholder="USUARIO" type="text" required autofocus></b>
    </fieldset>
    <fieldset>
      <b>Contrase&ntilde;a: <input name="password" placeholder="password" type="text" tabindex="2" required></b>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>


<!-- Arbitro -->


<div class="container">  
  <form class="contact" id="form1" action="sesion/ARB.php" method="post">
    <h3>Registro de &Aacute;rbitro</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <b>Nombre: <input name="nombreA" placeholder="Nombre" type="text" tabindex="1" required autofocus></b>
    </fieldset>
    <fieldset>
      <b>Direcci&oacute;n: <input name="direccion" placeholder="Direccion" type="text" tabindex="2" required></b>
    </fieldset>
    <fieldset>
      <b>Correo: <input name="correo" placeholder="Correo" type="email" tabindex="4" required></b>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>

<!-- Pacas -->


<div class="container">  
  <form class="contact" id="form6" action="sesion/RP.php" method="post">
    <h3>Registro de Pacas</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <b>N&uacute;mero de Paca: <input name="numPaca" placeholder="N&uacute;mero de Paca" type="number" min="1" max="10" required autofocus></b>
    </fieldset>
    <fieldset>
      <b>Status: <input name="status" placeholder="Status" type="text" tabindex="2" required></b>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>

<!--Sesion-->

<div class="container">  
  <form class="contact" id="form2" action="sesion/ingresa.php" method="post">
    <h3>Iniciar Sesi&oacute;n Universidad</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input name='usuario' placeholder="Universidad" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name='password' class="password" placeholder="Password" type="password" tabindex="2" size="10px" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>
 
<center><img src="images/logo.jpg" class="imagen"></center>
<script src="js/jquery.js"></script>
<script src="js/myjs.js"></script>
		</body>
	</html>