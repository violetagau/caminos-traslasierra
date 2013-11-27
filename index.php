<?php 

if( isset($_GET['result']) && $_GET['result']!='' ):
	$result = (string)$_GET['result'] == 'ok' ? 'ok' : 'bad';
endif;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta name="google-site-verification" content="CMqde_HKT7RMihWcwQM8EJ8PTpuE9u45wf5T0RHdlAs" />
    <meta charset="utf-8">
    <title>Caminos Traslasierra, empresa de movimiento de suelos, excavaciones, nivelaciones de terrenos, caminos y desmontes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empresa especialista en movimiento de suelos, excavaciones y preparaci&oacute;n de terrenos para construcci&oacute;n y vivienda. Trabajamos principalmente en el area de C&oacute;rdoba, Argentina">
    <meta name="author" content="">
    <meta name="keywords" content="movimiento de suelo, movimiento de tierra, nivelacion de terreno, limpieza de campos, realizacion de caminos, desmonte selectivo, hacer un camino, movimiento de piedras grandes, compactacion de suelo, pozo para pileta, contruccion de represa, desbarre de represa, reparacion de represa, cortafuego, zanjeo, terraplen, rolado de campos, arado de campos, preparacion de campo para siembra, pala hidraulica, trabajos con retro, trabajos con pala, cordoba, traslasierra, caminos traslasierra, maquinaria para movimiento de tierra, pala hidráulica cargadora con retroexcavadora, pala hidráulica con cargadora frontal, compresor, voladuras" />


    <!-- Le styles -->
    <link href="css/bootstrap2.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: relative;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 18px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
    }

    .carousel-control {
      background-color: transparent;
      border: 0;
      font-size: 120px;
      margin-top: 0;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-bottom: 100px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing h2 {
      font-weight: normal;
      font-size: 30px;
    }
    .marketing .span4 p, .marketing .span4 ul {
      margin-right: 10px;
    }
	.marketing .span4 p {
	  margin-left: 10px;
	}


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
/*      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-bottom: 40px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script>
		$(document).ready(function(){
			$("form#contacto").validate({
			
				rules: {
					nombre: "required",
					//telefono: "required",
					email: {
						required: true,
						email: true
					}
				},
				errorElement: "em" // te crea un <em>, podés poner otra cosa, y así darle estilo, onda #contacto em { rojo :P }
			});
			$.validator.messages.required = ' Requerido'; //Mensaje default para todos los campos
		});
		</script>
		<style>
			#contacto em {
				color: #f00;
			}
		</style>
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Caminos Traslasierra</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/">Inicio</a></li>
              <li><a href="servicios.html">Servicios</a></li>
              <li><a href="trabajos-realizados.html">Trabajos Realizados</a></li>
              <li><a href="index.php#contacto">Pedir un Presupuesto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Caminos Traslasierra</h1>
              <p class="lead">Realizamos tareas de movimiento de suelos con gran maquinaria y preparaci&oacute;n de terrenos para construcci&oacute;n y vivienda.</p>
              <a class="btn btn-large btn-primary" href="#">Solicitar cotizaci&oacute;n &raquo;</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Movimiento de suelos</h1>
              <p class="lead">Nos dedicamos a la creaci&oacute;n de caminos en &aacute;reas inaccesibles: en pendientes pronunciadas y/o muy rocosas.</p>
              <a class="btn btn-large btn-primary" href="#">Pedir un presupuesto</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Caminos Traslasierra</h1>
              <p class="lead">Somos una empresa especialista en nivelaciones, movimiento de suelos y excavaciones.</p>
              <a class="btn btn-large btn-primary" href="#">Ver trabajos realizados &raquo;</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
		<div class="row">
		  <div class="span4">
		    <h2>Servicios Principales</h2>
			<ul>
				<li>Caminos, Limpieza de campos</li>
				<li>Creaci&oacute;n de caminos en &aacute;reas inaccesibles (en pendientes pronunciadas y/o muy rocosas)</li>
				<li>Desmonte selectivo, Pozos para piletas, Cortafuegos</li>
				<li>Movimiento y/o extracci&oacute;n de obst&aacute;culos y/o grandes piedras</li>
				<li>Nivelaciones de terreno, Compactaci&oacute;n de suelos</li>
				<li>Construcci&oacute;n, reparaci&oacute;n y desbarre de represas y lagos</li>
				<li>Zanjeo para tendido de lineas de corriente eléctrica y agua</li>
				<li>Terraplenes para caminos o basamento para edificaci&oacute;n</li>
			</ul>
		    <p><a class="btn" href="#">View details &raquo;</a></p>
		  </div>
		  <div class="span4">
		    <h2>Trabajos complementarios</h2>
			<ul>
				<li>Rolado de campos con tractor</li>
				<li>Arado y prepraci&oacute;n de campos para siembra con tractor</li>
				<li>Tendido de alambrados</li>
				<li>Construcci&oacute;n de pircas</li>
				<li>Entubamiento de acequias</li>
				<li>Construcci&oacute;n de vados en arroyos</li>
				<li>Ubicaci&oacute;n de napas de agua y construcci&oacute;n de pozos</li>
			</ul>
		    <p><a class="btn" href="#">View details &raquo;</a></p>
		 </div>
		 <div class="span4">
		   <h2>Experiencia en Traslasierra</h2>
			<ul>
				<li>Yacanto, partido de San Javier</li>
				<li>Los Pozos, partido de Villa de Las Rosas</li>
				<li>San Javier Arriba</li>
				<li>La aguadita</li>
				<li>Las Tapias, partido de Villa de Las Rosas</li>
				<li>Pocho</li>
				<li>Nono</li>
				<li>Achiras Arriba, partido de San Javier</li>
				<li>La Poblaci&oacute;n, partido de San Javier</li>
				<li>Villa de Las Rosas</li>
			</ul>
		   <p><a class="btn" href="#">Ver mapa &raquo;</a></p>
		</div>
		</div>





      <hr class="featurette-divider">

      <div class="featurette">
        <a id="contacto"></a>
        <h2 class="featurette-heading">Solicite una cotizaci&oacute;n <strong>sin cargo</strong>. <span class="muted">Consultenos sin compromiso.</span></h2>
        <div class="row">
        	<div class="span1">
        	</div>
        	<div class="span5">
        		<form id="contacto" action="enviar.contacto.php" enctype="application/x-www-form-urlencoded" method="post" name="contacto">
	        		<fieldset>
								<?php if($result==='bad'): ?>
									<div id="error">Error, compruebe que los datos son correctos.</div>
								<?php elseif($result==='ok'): ?>
									<div id="exito">&iexcl;Gracias por ponerse en contacto! Nos comunicaremos con Ud a la brevedad.</div>
								<?php endif; ?>
								<legend>Env&iacute;e su consulta y responderemos a la brevedad:</legend>
								<label for="nombre">Nombre y Apellido</label>
								<input id="nombre" name="nombre" class="span4" type="text" placeholder="Escriba aqu&iacute; su Nombre y Apellido">
								<label for="telefono">Tel&eacute;fono</label>
								<input id="telefono" name="telefono" class="span4" type="text" placeholder="Escriba aqu&iacute; un Tel&eacute;fono de contacto">
								<label for="email">Email</label>
								<input id="email" name="email" class="span4" type="email" placeholder="Escriba aqu&iacute; su direcci&oacute;n de Email">
								<span class="help-block">Por favor complete al menos un medio de contacto (Tel&eacute;fono o Email)</span>
								<label for="consulta">Solicitud o consulta:</label>
								<textarea id="consulta" name="consulta" class="span4" rows="7" placeholder="Puede escribir aqu&iacute; una breve descripci&oacute;n del tipo de trabajo que necesita"></textarea>
								<span class="help-block">No es obligatorio que env&iacute;e un detalle del trabajo, puede dejar vac&iacute;o el campo de <em>Solicitud</em> y nosotros nos comunicaremos con Usted.</span>
								<p>
									<input type="submit" id="enviar" name="enviar" value="Enviar solicitud" class="btn  btn-large btn-primary" /> 
			        			</p>
	        		</fieldset>
	        	</form>
        	</div>
        	<div class="span1"></div>
        	<div class="span4">
	        	<legend>O bien cont&aacute;ctenos directamente:</legend>
				<dl>
					<dt><i class="icon-hand-right"></i> Jos&eacute; Gau</dt>
					<dd><i class="icon-screenshot"></i> 03544-15-440837</dd>
					<dd class="email"><i class="icon-envelope"></i> <a href="mailto:josegau@caminostraslasierra.com.ar">josegau@caminostraslasierra.com.ar</a></dd>
					<dt><i class="icon-hand-right"></i> Daniel Magri</dt>
					<dd><i class="icon-screenshot"></i> 003544-15-405192</dd>
					<dd class="email"><i class="icon-envelope"></i> <a href="mailto:contacto@caminostraslasierra.com.ar">contacto@caminostraslasierra.com.ar</a></dd>
				</dl>
        	</div>
			<div class="span1">
			</div>
        </div>
	</div>

      <hr class="featurette-divider">


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Volver arriba <i class="icon-arrow-up"></i></a></p>
        <p>&copy; 2012 Caminos Traslasierra &middot; Cont&aacute;ctenos: <i class="icon-hand-right"></i> Jos&eacute; Gau <i class="icon-screenshot"></i> 03544-15-440837 <i class="icon-envelope"></i> <a href="mailto:josegau@caminostraslasierra.com.ar">josegau@caminostraslasierra.com.ar</a> &middot; <i class="icon-hand-right"></i> Daniel Magri <i class="icon-screenshot"></i> 003544-15-405192 <i class="icon-envelope"></i> <a href="mailto:contacto@caminostraslasierra.com.ar">contacto@caminostraslasierra.com.ar</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-38263042-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
  </body>
</html>
