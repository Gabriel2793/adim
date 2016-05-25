 <html>
 <head>
 	<title>Sesion</title>
 </head>
 <body>
 	<?php 

		session_start();
		if(isset($_SESSION['u_usuario'])){
			echo "sesion iniciada";
		}else{
			header("location:../index.php");
		}
		echo "<a href='cerrarS.php'>Cerrar Sesion</a>";
 	?>	
 </body>
 </html>