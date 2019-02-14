<?php
$r2=$_POST["d1"];  //lee usuario del formulario

$r1=($_GET['r1']);//lee usuario del formulario

$nombre=($_GET['nombre']);

?>

<?php include 'bubble.php'; ?>
<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo2.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="less/main.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
		<body class="seccion3">
		<div class="container">
			<!-- Top Navigation -->
			<section class="template-section tres">
			
			
				<form class="ac-custom ac-custom3 ac-radio ac-fill borde" autocomplete="off"  action="validar.php?nombre=<?php echo $nombre ?>&r1=<?php echo $r1; ?>&r2=<?php echo $r2; ?>" method="post" >
					
					<h2>¿Cuál es tu comida favorita?</h2>

					<div class="imagenes">
					<ul >
					    <li> <img src="img/a3.png" alt=""> </li>
					    <li><img src="img/b3.png" alt=""></li>
					    <li><img src="img/c3.png" alt=""></li>
					</ul>
					</div>
					<ul class="radio">
						<li><input id="e1" name="f1" type="radio" value="1" required onclick="myFunction()"><label for="e1">&nbsp;</label></li>
						<li><input id="e2" name="f1" type="radio" value="2" onclick="myFunction()"><label for="e2">&nbsp;</label></li>
						<li><input id="e3" name="f1" type="radio" value="3" onclick="myFunction()"><label for="e3">&nbsp;</label></li>
					</ul>
					<ul class="prueba">
						<li class="prueba">POSTRES</li>
						<li class="prueba clasico">CARNE ASADA</li>
						<li class="prueba">VEGETARIANA</li>
					</ul>


				
					<button id="boton" class="btn btn-2 btn-2g">SIGUIENTE</button>
				</form>

				
           
			</section>
			
		</div><!-- /container -->
		
		<script src="js/svgcheckbx.js"></script>
				<script>
function myFunction() {
  window.location.href = "#boton";
}
</script>
		
	</body>
</html>