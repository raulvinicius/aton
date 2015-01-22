<!-- CÓDIGO HTML VEM AQUI -->



<p>I'm header</p>



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

<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <?php $tUrl = get_bloginfo("template_url"); ?>

    <?php require( "frontend/" . $fileN2 . '.php' ) ?>
    <?php die(); ?>

<?php endif; ?>
