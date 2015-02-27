<?php get_header(); ?>

<section class="chamada home compensa-menu">

	<div class="container-fluid">
		<div>
			<div class="col-lg-8">
				<hgroup>
					<h2>Sua casa fora de casa</h2>
					<h3>Conforto e tranquilidade em Goiânia</h3>
				</hgroup>
			</div>

			<div class="col-lg-4">
				<form id="form-pre-reserva" class="container-fluid">
					<div class="row">
						<div class="form-group g col-lg-12">
							<label for="nome-reserva"><span>Nome</span>
							<input type="text" class="form-control" id="nome-reserva">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-4">
							<label for="telefone-reserva">Telefone
							<input type="phone" class="form-control" id="telefone-reserva">
							</label>
						</div>
						<div class="form-group col-lg-8">
							<label for="email-reserva">E-mail</label>
							<input type="email" class="form-control" id="email-reserva">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-lg-6">
							<label for="entrada-reserva">Entrada</label>
							<input type="date" class="form-control" id="entrada-reserva">
						</div>
						<div class="form-group col-lg-6">
							<label for="saida-reserva">Saída</label>
							<input type="date" class="form-control" id="saida-reserva">
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn btn-default">Fazer minha reserva</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</section>




</body>




      <footer>
        <p>&copy; Company 2015</p>
      </footer>










<?php get_footer(); ?>