<?php include 'bubble.php'; ?>
<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Animated Checkboxes and Radio Buttons with SVG</title>
		<meta name="description" content="Animated Checkboxes and Radio Buttons with SVG: Using SVG for adding some fancy 'check' animations to form inputs" />
		<meta name="keywords" content="animated checkbox, svg, radio button, styled checkbox, css, pseudo element, form, animated svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo2.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="less/main.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<?php 
     if (isset($_POST['submit'])) { 
         
          $a=$_POST["b1"];  //lee usuario del formulario
echo ($a);
    $b=$_POST["d1"];  //lee usuario del formulario
echo ($b);
$c=$_POST["f1"];  //lee usuario del formulario
echo ($c);
         
if ($a==null or $b==null or $c==null)
{
    echo "<script>
                alert('Por favor, responde todas las preguntas.');
                window.location= 'index.php'
    </script>";
}
$a1=0;
$b1=0;
$c1=0;

if( $a == 1) { 
$a1=$a1+1;   
}
if( $a == 2) { 
$b1=$b1+1;   
}
if( $a == 3) { 
$c1=$c1+1;   
}

if( $b == 1) { 
$a1=$a1+1;   
}
if( $b == 2) { 
$b1=$b1+1;   
}
if( $b == 3) { 
$c1=$c1+1;   
}

if( $c == 1) { 
$a1=$a1+1;   
}
if( $c == 2) { 
$b1=$b1+1;   
}
if( $c == 3) { 
$c1=$c1+1;   
}

$bandera=0;

if ($a1>1)
{
    echo("a");
    $bandera=1;
}
if ($b1>1)
{
    echo("b");
    $bandera=1;
}
if ($c1>1)
{
    echo("c");
    $bandera=1;
}
if ($bandera==0)
    
{
     echo("ninguna");
}
    echo($c1);
         
         
         
         
         
                                  }
         ?>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<section class="template-section">
			
			
				<form class="ac-custom ac-radio ac-fill borde" autocomplete="off"  action="" method="post">
					<h2>¿Cuál de estos es tu RK favorito?</h2>
					<div class="imagenes">
					<ul >
					    <li> <img src="img/a1.png" alt=""> </li>
					    <li><img src="img/b1.png" alt=""></li>
					    <li><img src="img/c1.png" alt=""></li>
					</ul>
					
					</div>
					<ul class="radio">
						<li><input id="a1" name="b1" type="radio" value="1"><label for="a1">&nbsp;</label></li>
						<li><input id="a2" name="b1" type="radio" value="2"><label for="a2">&nbsp;</label></li>
						<li><input id="a3" name="b1" type="radio" value="3"><label for="a3">&nbsp;</label></li>
					</ul>
<?php if (isset($r1)) echo "entre";?>

				
					<h2>¿Qué emojis utilizas más?</h2>
					<div class="imagenes">
					<ul >
					    <li> <img src="img/a2.png" alt=""> </li>
					    <li><img src="img/b2.png" alt=""></li>
					    <li><img src="img/c2.png" alt=""></li>
					</ul>
					</div>
					<ul class="radio">
						<li><input id="c1" name="d1" type="radio" value="1"> <label for="c1">&nbsp;</label></li>
						<li><input id="c2" name="d1" type="radio" value="2"><label for="c2">&nbsp;</label></li>
						<li><input id="c3" name="d1" type="radio" value="3"><label for="c3">&nbsp;</label></li>
					</ul>
			
				
					<h2>¿Cuál es tu comida favorita?</h2>
					<div class="imagenes">
					<ul >
					    <li> <img src="img/a3.png" alt=""> </li>
					    <li><img src="img/b3.png" alt=""></li>
					    <li><img src="img/c3.png" alt=""></li>
					</ul>
					</div>
					<ul class="radio">
						<li><input id="e1" name="f1" type="radio" value="1"><label for="e1">&nbsp;</label></li>
						<li><input id="e2" name="f1" type="radio" value="2"><label for="e2">&nbsp;</label></li>
						<li><input id="e3" name="f1" type="radio" value="3"><label for="e3">&nbsp;</label></li>
					</ul>
					<input class="btn btn-primary " type="submit" name="submit" value="Login">
				</form>

				
           
			</section>
			
		</div><!-- /container -->
		
		<script src="js/svgcheckbx.js"></script>
		
	</body>
</html>