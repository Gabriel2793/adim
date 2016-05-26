<!DOCTYPE html>
	<html>
		<head>
			<title>Arco</title>
			<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../css/mycss.css">
			<link rel="stylesheet" type="text/css" href="../bootstrapdatetimepicker/css/bootstrap-datetimepicker.css">
		</head>
		<body>
      <?php 

    session_start();
    //substr($_SESSION['u_usuario'], 3)
    if(isset($_SESSION['u_usuario']) && $_SESSION['u_usuario'] == 'ADM'){
        
      }else{
        header("location:sesion/sesion.php");
      }
    ?>  
			<div class="container">
				<center><img src="../images/3darchery.jpg" id="im2"></center>
			</div>
			<div class="container">
			<nav class="container">
				<ul class="row">
					<li class="col-md-3" id="RPa">Registrar partido</li>
					<li class="col-md-3" id="VA">Ver arbitros</li>
					<li class="col-md-2" id="RC">Hacer partidos</li>
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


		<!-- Administrador-->


<div class="container">  
  <form class="contact" id="form" action="RPa.php" method="post">
    <h3>Registrar partido</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <b>Fecha:  <input id="fecha" name="fecha" placeholder="FECHA" type="text" required autofocus></b>
    </fieldset>
    <fieldset>
      <b>N&uacute;mero de pacas:  <input name="numPacas" placeholder="N&uacute;mero de pacas" type="number" tabindex="2" min="1" max="12" required></b>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
</div>

<br><br>
<div id="verarb" class="colortabla">
  	
 <?php 
 		require_once('conecta.php');
  		$conexion8 = new Conecta();
  		$conexion8 -> query = " SELECT  nombreA as albitro, direccion as direccion, correo as correo FROM ARBITRO";

            $conexion8 -> select_query();
                        $reg = count($conexion8 -> rows);
            if($reg>0){
                foreach ($conexion8 as $key => $value) {
                    $datos=$value;
                }
                echo "<div class='container'>

    					<div class='row'>
    						<div class='col-md-4'>
    							Nombre del Arbitro 
    						</div>

    						<div class='col-md-4'>
    							Direcci&oacute;n
    						</div>

    						<div class='col-md-4'>
    							Telefono
    						</div>
    					</div>

    				</div>";
                for($i=0; $i < $reg; $i++){ 
    				echo "<div class='container'>

    					<div class='row'>
    						<div class='col-md-4'>
    							".$datos[$i]['albitro']."
    						</div>

    						<div class='col-md-4'>
    							".$datos[$i]['direccion']."
    						</div>

    						<div class='col-md-4'>
    							".$datos[$i]['correo']."
    						</div>

    					</div>

    				</div>";
                }
            }
  	 ?>
  	</div>


		<script src="../js/jquery.js"></script>
		 <script src='../bootstrapdatetimepicker/js/bootstrap-datetimepicker.js'></script>
<script src="../js/myjs.js"></script>

</body>
</html>