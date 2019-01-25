<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>
<?php include 'bubble.php'; ?>
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
	     <title>Test RK</title>
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
<div class="grid">
	<div class="col">&nbsp;</div>
	<div class="col dos">
	
	<h2> <?php echo ($_SESSION["name"]) ?> ERES UN 
RK COOL</h2>
<p>Sin duda es el más cool de su casa, su escuela, su trabajo y su grupo de amigos. Es sociable y siempre está al tanto de las últimas tendencias. Lo suyo es la vanguardia y los buenos momentos.</p>
		<div class="buton"><a class="btn btn-2 btn-2g" href="http://www.facebook.com/sharer.php?u=http://test.rksports.com.mx/test/a.php" >Compartir </a></div>
		<div class="fb-share-button" data-href="http://test.rksports.com.mx/test/a.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftest.rksports.com.mx%2Ftest%2Fa.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
	</div>
</div>
	</section>
	
</body>