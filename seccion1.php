<?php

 $nombre=$_POST["name"];  //lee usuario del formulario

?>
<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
   <?php include 'bubble_link.php'; ?>
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
   <?php include 'bubble.php'; ?>
    <div class="container">
        <!-- Top Navigation -->
        <section class="template-section">


            <form class="ac-custom ac-custom2  ac-radio ac-fill borde" autocomplete="off" action="seccion2.php?nombre=<?php echo $nombre ?>" method="post">

                <h2>¿Cuál de estos es tu RK favorito?</h2>

                <div class="imagenes">
                    <ul>
                        <li><img src="img/a1.png" alt=""><input id="a1" name="b1" type="radio" value="1" required><label class="primera" for="a1">&nbsp;</label>
                            <h3>EMOJI</h3>
                        </li>
                        <li><img src="img/b1.png" alt=""><input id="a2" name="b1" type="radio" value="2"><label class="primera" for="a2">&nbsp;</label>
                            <h3>CLÁSICO</h3>
                        </li>
                        <li><img src="img/c1.png" alt=""><input id="a3" name="b1" type="radio" value="3"><label class="primera" for="a3">&nbsp;</label>
                            <h3>COPA DEL MUNDO</h3>
                        </li>
                    </ul>

                </div>


                <button id="boton" class="btn btn-2 btn-2g">SIGUIENTE</button>
            </form>



        </section>

    </div><!-- /container -->


    <script src="js/svgcheckbx.js"></script>
    <?php include 'bubble_js.php'; ?>

</body>

</html>
