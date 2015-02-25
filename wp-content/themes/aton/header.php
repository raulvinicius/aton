<!-- CÓDIGO HTML VEM AQUI -->


<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $frontendUrl = "/frontend"; //variável usada nos urls dentro do ambiente de desenvolvimento frontend?>

<?php endif; ?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Aton Plaza Hotel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="">
            <div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand main-logo" href="<?php bloginfo('url'); echo $frontendUrl ?>"><h1>Aton Plaza Hotel</h1></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
    			<ul class="nav navbar-nav">
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/o-hotel">O Hotel</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/acomodacoes">Acomodações</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/servicos">Serviços</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/reservas">Reservas</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/tarifas">Tarifas</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/promocoes">Promoções</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/parceiros">Parceiros</a></li>
    		        <li><a href="<?php bloginfo('url'); echo $frontendUrl ?>/contato">Contato</a></li>
    	      </ul>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>



<!-- //////////////////// -->




<?php //$fileN =  basename ( $_SERVER["SCRIPT_NAME"] ); ?>
<?php $fileN2 = $_SERVER[ "REQUEST_URI" ] ?>
<?php $fileN2 = str_replace("/aton", '', $fileN2) ?>
<?php $fileN2 = str_replace("/frontend", '', $fileN2) ?>
<?php $fileN2 = explode('/', $fileN2) ?>
<?php $fileN2 = $fileN2[1]; ?>

<?php

if ( $fileN2 == "" ) : 
	$fileN2 = "index";
endif;

?>

<?php if ( $frontendUrl != "" ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/" . $fileN2 . '.php' ) ?>
    <?php die(); ?>

<?php endif; ?>
