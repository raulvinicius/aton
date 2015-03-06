$(document).ready(function() {

	$('.navbar a.contato').bind( 'click', function(e){
		e.preventDefault;
		$('#contato').show();
		return false;
	} );

	$('.navbar a.reservas').bind( 'click', function(e){
		e.preventDefault;
		$('#reservas').show();
		return false;
	} );

	$('.fechar-modal-form, .click-trap').bind( 'click', function(e){
		$(this).closest('section').hide();
		// $(this).closest('form')[0].reset();
		return false;
	} );

	$('.aton-form').bind( 'click', function(e){
		return false;
	} );

});