<?php

 $nombre=$_POST["name"];  //lee usuario del formulario
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
		<body class="seccion1">
		<div class="container">
			<!-- Top Navigation -->
			<section class="template-section">
			
			
				<form class="ac-custom ac-custom2  ac-radio ac-fill borde" autocomplete="off"  action="seccion2.php?nombre=<?php echo $nombre ?>&variable2=<?php echo $a; ?>" method="post" >
		
					<h2>TODA LA DIVERSIÓN DE EMOJI</h2>
	<p>Los únicos con la licencia oficial más original e innovadora</p>
				<p>¿Cuál de estos es tu RK favorito?</p>
					<div class="imagenes">
					<ul >
					    <li> <img src="img/a1.png" alt=""> </li>
					    <li><img src="img/b1.png" alt=""></li>
					    <li><img src="img/c1.png" alt=""></li>
					</ul>
					
					</div>
					<ul class="radio">
						<li><input id="a1" name="b1" type="radio" value="1" required ><label class="primera" for="a1">&nbsp;</label></li>
						
						<li><input id="a2" name="b1" type="radio" value="2" ><label class="primera" for="a2">&nbsp;</label></li>
						<li><input id="a3" name="b1" type="radio" value="3"><label class="primera" for="a3">&nbsp;</label></li>
					</ul>
					
					
					<ul class="prueba">
						<li class="prueba">EMOJI</li>
						<li class="prueba clasico">CLÁSICO</li>
						<li class="prueba">COPA DEL MUNDO</li>
					</ul>


				
					<button class="btn btn-2 btn-2g">SIGUIENTE</button>
				</form>

				
           
			</section>
			
		</div><!-- /container -->
		
		<script src="js/svgcheckbx.js"></script>
		
	</body>
</html>