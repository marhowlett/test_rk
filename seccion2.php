<?php
$r1=$_POST["b1"];  //lee usuario del formulario
echo ($r1);
$nombre=($_GET['nombre']);
echo ($nombre);
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
		<body class="seccion2">
		<div class="container">
			<!-- Top Navigation -->
			<section class="template-section">
			
			
				<form class="ac-custom ac-radio ac-fill borde" autocomplete="off"  action="seccion3.php?nombre=<?php echo $nombre ?>&r1=<?php echo $r1; ?>" method="post" >
					
					<h2>TODA LA DIVERSIÓN DE EMOJI</h2>
	<p>Los únicos con la licencia oficial más original e innovadora</p>
				<p>¿Qué emojis utilizas más?</p>
					<div class="imagenes">
					<ul >
					    <li> <img src="img/a2.png" alt=""> </li>
					    <li><img src="img/b2.png" alt=""></li>
					    <li><img src="img/c2.png" alt=""></li>
					</ul>
					</div>
					<ul class="radio">
						<li><input id="c1" name="d1" type="radio" value="1" required> <label for="c1">&nbsp;</label></li>
						<li><input id="c2" name="d1" type="radio" value="2"><label for="c2">&nbsp;</label></li>
						<li><input id="c3" name="d1" type="radio" value="3"><label for="c3">&nbsp;</label></li>
					</ul>
					<ul class="prueba">
						<li class="prueba">CORAZONES</li>
						<li class="prueba clasico">ANIMALES</li>
						<li class="prueba">CARAS</li>
					</ul>


				
					<button class="btn btn-2 btn-2g">SIGUIENTE</button>
				</form>

				
           
			</section>
			
		</div><!-- /container -->
		
		<script src="js/svgcheckbx.js"></script>
		
	</body>
</html>