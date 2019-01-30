<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>
<?php include 'bubble.php'; ?>
<head>
	<title>ERES UN 
RK COOL</title>
<meta property="og:title" content="ERES UN 
RK COOL" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://test.rksports.com.mx/test/b.php" />
<meta property="og:image" content="http://test.rksports.com.mx/test/img/Resultados-Test_Cool.png" />
<meta property="og:description" content="Sin duda es el más cool de su casa, su escuela, su trabajo y su grupo de amigos. | ¿Qué RK eres? Te sorprenderás." />
	
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
</head>	    
<body class="a">
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
	<div class="col responsive"> <img src="img/cool.png" alt=""></div>
	<div class="col dos">
	
	<h2> <?php echo ($_SESSION["name"]) ?> ERES UN 
RK COOL</h2>
	<p>Sin duda es el más cool de su casa, su escuela, su trabajo y su grupo de amigos. Es sociable y siempre está al tanto de las últimas tendencias. Lo suyo es la vanguardia y los buenos momentos.</p>

		<div class="buton "><a target="_blank" class="btn btn-2 btn-2g " href="http://www.facebook.com/sharer.php?u=http://test.rksports.com.mx/test/b.php" >Compartir </a></div>
		</div>
</div>
	</section>
	
</body>