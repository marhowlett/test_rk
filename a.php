<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>
<?php include 'bubble.php'; ?>
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
	
<body class="a">
<section class="template-section a">
<div class="grid">
	<div class="col">&nbsp;</div>
	<div class="col dos">
	
	<h2> <?php echo ($_SESSION["name"]) ?> ERES UN 
RK COOL</h2>
<p>Sin duda es el más cool de su casa, su escuela, su trabajo y su grupo de amigos. Es sociable y siempre está al tanto de las últimas tendencias. Lo suyo es la vanguardia y los buenos momentos.</p>
<div class="buton"><button class="btn btn-2 btn-2g">COMPARTIR EN FACEBOOK</button></div>
	</div>
</div>
	</section>
	
</body>