<?php get_header(); ?>

<section id="home" class="chamada compensa-menu">

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<hgroup>
					<h2>Sua casa fora de casa</h2>
					<h3>Conforto e tranquilidade em Goiânia</h3>
				</hgroup>
			</div>

			<div class="omega col-lg-4">
				<form id="form-pre-reserva" class="container-fluid">
					<div class="row">
						<div class="form-group g col-sm-12">
							<div class="container-fluid">
								<div class="row">
									<label for="nome-reserva">
										<span class="col-sm-2"><p>Nome</p></span>
										<div id="" class="wrap-input col-sm-10">
											<input type="text" class="form-control" id="nome-reserva">
										</div>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-5">
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
						<div class="form-group col-sm-7">
							<div class="container-fluid">
								<div class="row">
									<label for="email-reserva">
										<span class="col-sm-3"><p>E-mail</p></span>
										<div class="wrap-input col-sm-9">
											<input type="email" class="form-control" id="email-reserva">
										</div>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-5">
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
						<div class="form-group col-sm-5">
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
					<div class="row">
						<button type="submit" class="ani-02-in-out btn btn-default">Fazer minha reserva</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="seta-rolagem ani-04-in-out"></div>

</section>

<div class="container-fluid">
	<div class="row">

		<section id="home" class="tour col-sm-6">

			<figure>

				<img src="<?php bloginfo('template_url') ?>/img/aton-icon-3600.png">

			</figure>

			<h2>Vamos dar uma volta</h2>
			<p>Confira nossas acomodações pelo Tour 360º</p>

		</section>
		
		<section id="home" class="mapa col-sm-6">

			<div class="row">

				<div class="col-sm-12">

					<i class="ico-onde-estamos"></i>
					<h2>Onde estamos</h2>
					<p id="endereco">Av. Anhanguera, nº 5308 - Centro (ao lado das Lojas Pernambucanas) <br>
						Goiânia-GO, CEP: 74043-010</p>

				</div>

			</div>
		
			<div class="row">

				<div class="map col-sm-5">

				</div>

				<div class="col-sm-7 alpha omega">

					<ul>

						<li><p>300 metros do <strong>Centro de Cultura e Convenções</strong>.</p></li>
						<li class="stripe"><p>08 Km do <strong>aeroporto</strong>.</p></li>
						<li><p>01 Km da <strong>Estação Rodoviária</strong> e <strong>Feira de Estação</strong>.</p></li>
						<li class="stripe"><p>Menos de 01 Km da <strong>Feira da Lua</strong> (a mais famosa feira de confecções)</p></li>
						<li><p>Menos de 01 Km da <strong>Feira Hippie</strong></p></li>
						<li class="stripe"><p>04 Km da <strong>Av. Bernardo Sayão</strong> (confecções).</p></li>
						<li><p>700 metros da <strong>Praça Cívica</strong>.</p></li>
						<li class="stripe"><p>06 Km do <strong>Shopping Flamboyant</strong>.</p></li>

					</ul>

				</div>

			</div>

		</section>
		
	</div>
</div>




<?php get_footer(); ?>