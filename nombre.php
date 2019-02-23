<html class="nombre">
<?php include 'bubble_link.php'; ?>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/set1.css" />
<link rel="stylesheet" type="text/css" href="less/main.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component2.css" />
<script src="js/modernizr.custom.js"></script>


<body class="nombre">
   <?php include 'bubble.php'; ?>
    <div class="container">


        <section class="template-section">
            <h2 class="diversion">En general, ¿cómo te gusta que te llame la gente?</h2>

            <form action="seccion1.php" method="post">
                <span class="input input--minoru">

                    <input class="input__field input__field--yoko" required type="text" id="name" name="name" autocomplete="off"/>

                    <label class="input__label input__label--yoko" for="input-17">
                        <p class="input__label-content input__label-content--yoko">Ej: Maria, Sofia, Pepe, Jesús</p>
                    </label>
                    <div class="buton">
                        <button class="btn btn-2 btn-2g">SIGUIENTE</button>

                    </div>
                </span>
            </form>

        </section>

    </div><!-- /container -->
    <script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
<?php include 'bubble_js.php'; ?>
</body>

</html>
