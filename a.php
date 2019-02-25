<?php
session_start(); //Iniciamos la Sesion o la Continuamos
?>

<head>
    <title>
    <?php echo ($_SESSION["name"]) ?> ES UN RK Ángel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?php echo ($_SESSION["name"]) ?> ES UN RK Ángel" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://test.rksports.com.mx/a.php" />
    <meta property="og:image" content="http://test.rksports.com.mx/img/Resultados-Test_Angel.jpg" />
    <meta property="og:description" content="Eres optimista, feliz, auténtico y una buena persona. | ¿Qué RK eres? Te sorprenderás." />
    <?php include 'bubble_link.php'; ?>
    <link rel="stylesheet" type="text/css" href="less/main.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component2.css" />
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="b">
   <?php include 'bubble.php'; ?>
    

    <section class="template-section a">
        <div class="grid invertido">
            <div class="col computadora">&nbsp;</div>
            <div class="col responsive"> <img src="img/angel.png" alt=""></div>
            <div class="col dos">

                <h2>
                    <?php echo ($_SESSION["name"]) ?> ES UN
                    RK Ángel</h2>
                <p>Eres optimista, feliz, auténtico y una buena persona. Las personas que te rodean te califican como honesto, responsable y modesto. Eres buen hij@, amig@ y pareja. Sin duda eres una persona admirable y exitosa.</p>

                <div class="buton "><a target="_blank" class="btn btn-2 btn-2g " href="http://www.facebook.com/sharer.php?u=http://test.rksports.com.mx/a.php">Compartir </a></div>
                
                
                <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <?php include 'bubble_js.php'; ?>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  
           
            </div>
        </div>
    </section>

</body>
