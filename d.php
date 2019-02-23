<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>
<?php include 'bubble.php'; ?>
<head>
	<title>ERES UN 
RK EXTROVERTIDO</title>
<meta property="og:title" content="ERES UN 
RK EXTROVERTIDO" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://test.rksports.com.mx/test/d.php" />
<meta property="og:image" content="http://test.rksports.com.mx/img/Resultados-Test_Extro.png" />
<meta property="og:description" content="Amas romper las reglas, eres diferente y vanguardista | ¿Qué RK eres? Te sorprenderás." />
	
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
</head>	    
<body class="c">
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
	<div class="col responsive"> <img src="img/extrovertido.png" alt=""></div>
	<div class="col dos">
	
	<h2> <?php echo ($_SESSION["name"]) ?> ES UN
RK Extrovertido</h2>
	<p>Amas romper las reglas, eres diferente y vanguardista, como si vinieras de otro mundo. Tú eres de esas personas que marcan tendencia y rompes los esquemas. Tu excentricismo te hace especial y admirado.</p>

		<div class="buton "><a target="_blank" class="btn btn-2 btn-2g " href="http://www.facebook.com/sharer.php?u=http://test.rksports.com.mx/test/d.php" >Compartir </a></div>
		</div>
</div>
	</section>
	
</body>