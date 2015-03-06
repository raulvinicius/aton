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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
        <style>
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
    		        <li><a class="hotel ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/o-hotel">O Hotel</a></li>
    		        <li><a class="acomodacoes ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/acomodacoes">Acomodações</a></li>
    		        <li><a class="servicos ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/servicos">Serviços</a></li>
    		        <li><a class="reservas ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/reservas">Reservas</a></li>
    		        <li><a class="tarifas ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/tarifas">Tarifas</a></li>
    		        <li><a class="promocoes ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/promocoes">Promoções</a></li>
    		        <li><a class="parceiros ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/parceiros">Parceiros</a></li>
    		        <li><a class="contato ani-02-in-out" href="<?php bloginfo('url'); echo $frontendUrl ?>/contato">Contato</a></li>
    	      </ul>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>

        <section id="reservas" id="compensa-menu">

            <div class="container-fluid">

                <div class="row click-trap">

                    <figure id="logo">
                        <img src="<?php bloginfo('template_url') ?>/img/aton-logo-branca.png">
                    </figure>

                    <form class="aton-form col-sm-4 col-sm-offset-4">

                        <div class="wrap-fields">

                            <div class="row titulo">
                                <h2 class="col-sm-10 col-sm-offset-1">Minha reserva</h2>
                                <button id="fechar-modal-form" class="col-sm-1 fechar-modal-form"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-fechar-modal.png"></button>
                            </div>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group g col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="nome-reserva">
                                                    <span class="col-sm-2"><p>Nome</p></span>
                                                    <div id="" class="wrap-input col-sm-10">
                                                        <input type="text" class="form-control nome" id="nome-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group g col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="email-reserva">
                                                    <span class="col-sm-2"><p>E-mail</p></span>
                                                    <div id="" class="wrap-input col-sm-10">
                                                        <input type="phone" class="form-control" id="email-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group g col-sm-5">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="telefone-reserva">
                                                    <span class="col-sm-5"><p>Telefone</p></span>
                                                    <div id="" class="wrap-input col-sm-7">
                                                        <input type="phone" class="form-control" id="telefone-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group g col-sm-7">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="cidade-reserva">
                                                    <span class="col-sm-3"><p>Cidade</p></span>
                                                    <div class="wrap-input col-sm-6">
                                                        <input type="text" class="form-control" id="cidade-reserva">

                                                    </div>
                                                    <div class="wrap-input wrap-uf-reserva col-sm-3">

                                                        <select id="uf-reserva" name="uf-reserva" class="form-control">
                                                            <option value="">UF</option>
                                                            <option value="AC">AC</option>
                                                            <option value="AL">AL</option>
                                                            <option value="AP">AP</option>
                                                            <option value="AM">AM</option>
                                                            <option value="BA">BA</option>
                                                            <option value="CE">CE</option>
                                                            <option value="DF">DF</option>
                                                            <option value="ES">ES</option>
                                                            <option value="GO">GO</option>
                                                            <option value="MA">MA</option>
                                                            <option value="MT">MT</option>
                                                            <option value="MS">MS</option>
                                                            <option value="MG">MG</option>
                                                            <option value="PA">PA</option>
                                                            <option value="PB">PB</option>
                                                            <option value="PR">PR</option>
                                                            <option value="PE">PE</option>
                                                            <option value="PI">PI</option>
                                                            <option value="RJ">RJ</option>
                                                            <option value="RN">RN</option>
                                                            <option value="RS">RS</option>
                                                            <option value="RO">RO</option>
                                                            <option value="RR">RR</option>
                                                            <option value="SC">SC</option>
                                                            <option value="SP">SP</option>
                                                            <option value="SE">SE</option>
                                                            <option value="TO">TO</option>  
                                                        </select>

                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group g col-sm-5">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="entrada-reserva">
                                                    <span class="col-sm-4"><p>Entrada</p></span>
                                                    <div class="wrap-input col-sm-8">
                                                        <input type="date" class="form-control" id="entrada-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group g col-sm-5">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="saida-reserva">
                                                    <span class="col-sm-4"><p>Saída</p></span>
                                                    <div class="wrap-input col-sm-8">
                                                        <input type="date" class="form-control" id="saida-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <legend>Tipos de quartos</legend>

                                <button id="btn-add-quarto">Adicionar quarto <i><img src="<?php bloginfo('template_url') ?>/img/aton-icon-mais.png"></i></button>

                                <ul id="quartos">

                                    <li class="col-sm-12 alpha omega">

                                        <figure class="col-xs-2 alpha">
                                            <img src="<?php bloginfo('template_url') ?>/img/aton-tb-quarto-reserva.jpg">
                                        </figure>

                                        <div class="col-xs-8">
                                            <div class="row opcao-1">
                                                <div class="col-sm-2" id="num">
                                                    <button class="seta-up"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-seta-cima-reservas.png"></button>
                                                    <span>01</span>
                                                    <button class="seta-down"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-seta-baixo-reservas.png"></button>
                                                </div>

                                                <div class="col-sm-10">

                                                    <p>Quarto duplo</p>

                                                </div>
                                            </div>

                                            <div class="row opcao-2">
                                                <input type="hidden" name="quantidade-quarto-duplo">

                                                <label for="cama-extra-quarto-duplo" class="col-sm-12">
                                                    <input type="checkbox" name="cama-extra-quarto-duplo" id="cama-extra-quarto-duplo" value="sim" /> <span id="ck-box-replace">
                                                    </span>Cama Extra
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-xs-2 omega">

                                            <button id="exclui-quarto"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-excluir-quartos.png"></button>

                                        </div>

                                    </li>

                                    <div class="clearfix"></div>

                                </ul>

                            </fieldset>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group g col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="pagamento-reserva">
                                                    <span class="col-sm-4"><p>Forma de pagamento</p></span>
                                                    <div id="" class="wrap-input col-sm-8">
                                                        <select class="form-control" id="pagamento-reserva" name="pagamento-reserva">
                                                            <option value=""></option>
                                                            <option value="Dinheiro">Dinheiro</option>
                                                            <option value="Cartão de débito">Cartão de débito</option>
                                                            <option value="Cartão de crédito">Cartão de crédito</option>
                                                        </select>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group textarea col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="observacoes-reserva">
                                                    <span class="col-sm-3"><p>Observações e comentários</p></span>
                                                    <div id="" class="wrap-input col-sm-9">
                                                        <textarea class="form-control" id="observacoes-reserva" name="observacoes-reserva" rows="4" cols="50">
                                                        </textarea>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="row">
                                <input type="submit" class="col-xs-12 alpha omega ani-02-in-out" value="Finalizar minha reserva">
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </section>


        <section id="contato" id="compensa-menu">

            <div class="container-fluid">

                <div class="row click-trap">

                    <figure id="logo">
                        <img src="<?php bloginfo('template_url') ?>/img/aton-logo-branca.png">
                    </figure>

                    <form class="aton-form col-sm-4 col-sm-offset-4">

                        <div class="wrap-fields">

                            <div class="row titulo">
                                <h2 class="col-sm-10 col-sm-offset-1">Contato</h2>
                                <button id="fechar-modal-form" class="col-sm-1 fechar-modal-form" onClick="return false;"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-fechar-modal.png"></button>
                            </div>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group g col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="nome-reserva">
                                                    <span class="col-sm-2"><p>Nome</p></span>
                                                    <div id="" class="wrap-input col-sm-10">
                                                        <input type="text" class="form-control nome" id="nome-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group g col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="email-reserva">
                                                    <span class="col-sm-2"><p>E-mail</p></span>
                                                    <div id="" class="wrap-input col-sm-10">
                                                        <input type="phone" class="form-control" id="email-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group g col-sm-5">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="telefone-reserva">
                                                    <span class="col-sm-5"><p>Telefone</p></span>
                                                    <div id="" class="wrap-input col-sm-7">
                                                        <input type="phone" class="form-control" id="telefone-reserva">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>

                                <div class="row">
                                    <div class="form-group textarea col-sm-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <label for="observacoes-reserva">
                                                    <span class="col-sm-3"><p>Mensagem</p></span>
                                                    <div id="" class="wrap-input col-sm-9">
                                                        <textarea class="form-control" id="observacoes-reserva" name="observacoes-reserva" rows="4" cols="50"></textarea>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="row">
                                <input type="submit" class="col-xs-12 alpha omega ani-02-in-out" value="Enviar">
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </section>



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
