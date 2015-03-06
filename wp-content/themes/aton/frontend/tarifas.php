<?php get_header(); ?>

<section id="tarifas" class="compensa-menu">

	<div class="container-fluid">

		<div class="row">

			<ul>
				<li id="individual" class="col-sm-4">

					<header><h2>Individual</h2></header>

					<ul>
						<li class="row">
							<h3 class="col-sm-6">Adultos</h3>
							<p>1</p>
							<figure class="col-sm-6">
								<img src="<?php bloginfo('template_url') ?>/img/aton-icon-adulto.png">
							</figure>
						</li>
						<li class="row">
							<h3 class="col-sm-6">Criança (menos de 07 anos)</h3>
							<p>-</p>
							<figure class="col-sm-6">
							</figure>
						</li>
						<li class="row">
							<h3 class="col-sm-6">Camas</h3>
							<p>01 solteiro</p>
							<figure class="col-sm-6">
								<img src="<?php bloginfo('template_url') ?>/img/aton-icon-cama-solteiro.png">
							</figure>
						</li>
					</ul>


					<div class="row">

						<div class="col-sm-6">
							<h3>Tarifa Internet</h3>
							<span>Preços exclusivos para reservas feitas pelo site</span>
						</div>

						<div class="col-sm-6">
							<p><span>R$</span>105<span>,00</span></p>
						</div>

					</div>

					<div class="row">

						<div class="col-sm-6">
							<h3>Tarifa Balcão</h3>
							<span>Preço para diárias contratadas na recepção do hotel.</span>
						</div>

						<div class="col-sm-6">
							<p><span>R$</span>105<span>,00</span></p>
						</div>

					</div>

					<div class="row">

						<button class="verificar col-sm-12">Verificar disponibilidade</button>

						<div class="col-sm-12">

							<div class="row">

								<p class="col-sm-8"><strong>03</strong> quartos para verificar, quantos você quer reservar?</p>

								<div class="col-sm-2">
								    <button class="seta-up"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-seta-cima-reservas.png"></button>
								    <span>01</span>
								    <button class="seta-down"><img src="<?php bloginfo('template_url') ?>/img/aton-icon-seta-baixo-reservas.png"></button>
								</div>

								<button class="col-sm-2">OK</button>

								
							</div>

						</div>

					</div>

				</li>

			</ul>


		</div>

	</div>



</section>




<?php get_footer(); ?>
