<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Industrias Castro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<?php

		//echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();
    	$urlServidor = Ruta::ctrRutaServidor();

		require "../admin/admin/config.php";
		include "functions.php";

		$conexion = conexion($bd_config);
				// Obtenemos los post
		$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
		$posts2 = obtener_post($blog_config2['post_por_pagina2'], $conexion);

	?>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/style.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/log.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/afterbef.css">	

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/paginacion.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">



	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->
	<!-- jQuery -->
	<script src="<?php echo $url; ?>vistas/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo $url; ?>vistas/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo $url; ?>vistas/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo $url; ?>vistas/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="<?php echo $url; ?>vistas/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo $url; ?>vistas/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo $url; ?>vistas/js/jquery.countTo.js"></script>
	
	<!-- MAIN JS -->
	<script src="<?php echo $url; ?>vistas/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo $url; ?>vistas/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo $url; ?>vistas/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo $url; ?>vistas/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="<?php echo $url; ?>vistas/js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo $url; ?>vistas/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo $url; ?>vistas/js/jquery.countTo.js"></script>
</head>



<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($rutas[0] == "index" || $rutas[0] == "trabajos" || $rutas[0] == "nosotros" || $rutas[0] == "contacto" || $rutas[0] == "servicios" || $rutas[0] == "blog" || $rutas[0] == "login" ){

		include "modulos/".$rutas[0].".php";

	}


	else{

		include "modulos/error404.php";

	}

}else{
	include "modulos/inicio.php";

}

?>

<!--=====================================
BOTON FLOTANTE
======================================-->

<script type="text/javascript" style="">
    (function () {
        var options = {
            facebook: "107694017316744", // Facebook page ID
            whatsapp: "+52 1 55 10 06 54 21", // WhatsApp number
            email: "adiazm@eago.com.mx", // Email
            sms: "5510065421", // Sms phone number
            call: "5510065421", // Call phone number
            company_logo_url: "http://localhost/eago-pag/images/logo-light.png", // URL of company logo (png, jpg, gif)
            greeting_message: "", // Text of greeting message
            call_to_action: "Cotiza ahora", // Call to action
            wa_vb_message: "", // Message for WhatsApp
            button_color: "#00B0B6", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

 <!--=================================
 back to top -->

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<!--=====================================
https://developers.facebook.com/
======================================-->



</body>
</html>