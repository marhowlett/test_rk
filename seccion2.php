<?php
$r1=$_POST["b1"];  //lee usuario del formulario

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

<body class="seccion2">
    <div class="container">
        <!-- Top Navigation -->
        <section class="template-section">


            <form class="ac-custom ac-radio ac-fill borde" autocomplete="off" action="seccion3.php?nombre=<?php echo $nombre ?>&r1=<?php echo $r1; ?>" method="post">

                <h2>¿Qué emojis utilizas más?</h2>


                <div class="imagenes">
                    <ul>
                        <li><img src="img/a2.png" alt=""><input id="c1" name="d1" type="radio" value="1" required><label class="primera" for="a1">&nbsp;</label>
                            <h3>CORAZONES</h3>
                        </li>
                        <li><img src="img/b2.png" alt=""><input id="c2" name="d1" type="radio" value="2"><label class="primera" for="a2">&nbsp;</label>
                            <h3>ANIMALES</h3>
                        </li>
                        <li><img src="img/c2.png" alt=""><input id="c3" name="d1" type="radio" value="3"><label class="primera" for="a3">&nbsp;</label>
                            <h3>CARAS</h3>
                        </li>
                    </ul>

                </div>


                <button id="boton" class="btn btn-2 btn-2g">SIGUIENTE</button>
            </form>



        </section>

    </div><!-- /container -->

    <script src="js/svgcheckbx.js"></script>
 

</body>

</html>
