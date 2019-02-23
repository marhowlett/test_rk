<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>
<head>
	<title>ERES UN 
RK FELIZ</title>
<meta property="og:title" content="ERES UN 
RK FELIZ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://test.rksports.com.mx/c.php" />
<meta property="og:image" content="http://test.rksports.com.mx/img/Resultados-Test_Fel.jpg" />
<meta property="og:description" content="Eres una persona feliz y todos sienten aprecio y una simpatía especial por ti | ¿Qué RK eres? Te sorprenderás." />
	<?php include 'bubble_link.php'; ?>
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
</head>	    
<body class="d">
<?php include 'bubble.php'; ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class="template-section a">
<div class="grid invertido">
	<div class="col computadora">&nbsp;</div>
	<div class="col responsive"> <img src="img/feliz.png" alt=""></div>
	<div class="col dos">
	
	<h2> <?php echo ($_SESSION["name"]) ?> ERES UN 
RK FELIZ</h2>
	<p>Eres una persona feliz y todos sienten aprecio y una simpatía especial por ti, aunque como todo gato, eres reservado y cauteloso; sin embargo, como te sabes adorable ves la vida con optimismo y buen humor. 
		<div class="buton "><a target="_blank" class="btn btn-2 btn-2g " href="http://www.facebook.com/sharer.php?u=http://test.rksports.com.mx/test/c.php" >Compartir </a></div>
		</div>
</div>
	</section>
	<?php include 'bubble_js.php'; ?>
</body>