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
				<center>
				<?php echo "<h2 class='titulo col-md-12'>". $_SESSION['u_usuario']."</h2>";?>
				</center>
			</div>
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
				<img src='../images/unam.jpg' class="imagen">
				</center>
				</div>
			</div>
		</div>

			<div class="container">  
  <form class="contact" id="form" action="RE.php" method="post">
    <h3>Registro de Equipo</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
      <input name="nombreE" placeholder="Nombre equipo" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="numIntegrantes" placeholder="Numero de Integrantes" type="number" tabindex="2" min="1" max="3" class="largo" required>
    </fieldset>
    <fieldset>
      <input name="status" placeholder="Status" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <?php
      	//	echo "<input name='UNIVERSIDAD_idUniversidad' placeholder='".$_SESSION['u_usuario']."' type='text' tabindex='4' value=".$_SESSION['u_usuario']." disabled required>";
      require_once('conecta.php');
      $conexion = new Conecta();
      $conexion-> query = "SELECT idUniversidad as id FROM UNIVERSIDAD where nombreU = '".$_SESSION['u_usuario']."'";

            $conexion -> select_query();
            $reg = count($conexion -> rows);
            if($reg>0){
                $msghtml="";
                foreach ($conexion as $key => $value) {
                    $datos=$value;
                }
                for($i=0; $i < $reg; $i++){ 
                    echo "<fieldset>
      <input name='UNIVERSIDAD_idUniversidad' placeholder='".$_SESSION['u_usuario']."' type='number' tabindex='2'  value='".$datos[$i]['id']."' class='ocultar' required>
    </fieldset>";
                        $iduni=$datos[$i]['id'];
                }
            }
        
        ?>

        
    </fieldset>
      <button type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
    </fieldset>
  </form>
  	<div class="container">  
  <form class="contact" id="form1" action="" method="post">
    <h3>Registro de Estudiantes</h3>
    <h4>Ingrese todos los campos</h4>
    <fieldset>
		    					<?php 

		    						$conexion3 = new Conecta();
      $conexion3-> query = "SELECT e.clvEquipo as clave, e.nombreE AS nombreE FROM EQUIPO e, UNIVERSIDAD u where u.idUniversidad = e.UNIVERSIDAD_idUniversidad and u.nombreU = '".$_SESSION['u_usuario']."'";

            $conexion3 -> select_query();
            $reg = count($conexion3 -> rows);
            if($reg>0){
                foreach ($conexion3 as $key => $value) {
                    $datos=$value;
                }
                echo " <select class='form-control' name='idequipo' placeholder='Elige equipo'>";
                for($i=0; $i < $reg; $i++){ 
                    echo "<option value=".$datos[$i]['clave'].">".$datos[$i]['nombreE']."</option>";
		    						
                }
                 echo "</select>";
            }

		    					 ?>
		    					
							        
							   
    </fieldset>
    <fieldset>
		    					<?php 

		    						$conexion4 = new Conecta();
      $conexion4-> query = "SELECT e.clvEquipo as clave, e.nombreE AS nombreE FROM EQUIPO e, UNIVERSIDAD u where u.idUniversidad = e.UNIVERSIDAD_idUniversidad and u.nombreU = '".$_SESSION['u_usuario']."'";

            $conexion4 -> select_query();
            $reg = count($conexion4 -> rows);
            if($reg>0){
                foreach ($conexion4 as $key => $value) {
                    $datos=$value;
                }
                echo " <select class='form-control' name='idequipo' placeholder='Elige equipo'>";
                for($i=0; $i < $reg; $i++){ 
                    echo "<option value=".$datos[$i]['clave'].">".$datos[$i]['nombreE']."</option>";
		    						
                }
                 echo "</select>";
            }

		    					 ?>
		    					
							        
							   
    </fieldset>
    <fieldset>
      <input name="nombrePila" placeholder="Nombre de Pila" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="apPatP" placeholder="Apellido paterno" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="apMatP" placeholder="Apellido materno" type="text" tabindex="4" required>
    </fieldset>
  </form>
</div>
  <br>
  	<br>
  <div id="verequipo" class="colortabla">
  	
 <?php 
  		$conexion2 = new Conecta();
  		$conexion2 -> query = " SELECT  nombreE as equipo, numIntegrantes as integrantes, status as status FROM EQUIPO  where UNIVERSIDAD_idUniversidad = ".$iduni;

            $conexion2 -> select_query();
                        $reg = count($conexion2 -> rows);
            if($reg>0){
                $msghtml="";
                foreach ($conexion2 as $key => $value) {
                    $datos=$value;
                }
                echo "<div class='container'>

    					<div class='row'>
    						<div class='col-md-4'>
    							Nombre del Equipo 
    						</div>

    						<div class='col-md-4'>
    							Numero de integrantes
    						</div>

    						<div class='col-md-4'>
    							status
    						</div>
    					</div>

    				</div>";
                for($i=0; $i < $reg; $i++){ 
    				echo "<div class='container'>

    					<div class='row'>
    						<div class='col-md-4'>
    							".$datos[$i]['equipo']."
    						</div>

    						<div class='col-md-4'>
    							".$datos[$i]['integrantes']."
    						</div>

    						<div class='col-md-4'>
    							".$datos[$i]['status']."
    						</div>

    					</div>

    				</div>";
                }
            }
  	 ?>
  	</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/myjs.js"></script>
 </body>
 </html>