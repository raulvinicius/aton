$(document).ready(function() {

	$('.navbar a.contato').bind( 'click', function(e){
		e.preventDefault;
		$('#contato').show();
		$('body').css('overflow', 'hidden');
		return false;
	} );

	$('.navbar a.reservas').bind( 'click', function(e){
		e.preventDefault;
		$('#reservas').show();
		$('body').css('overflow', 'hidden');
		return false;
	} );

	$('.fechar-modal-form, .click-trap').bind( 'click', function(e){
		$(this).closest('section').hide();
		$('body').css('overflow', 'auto');
		// $(this).closest('form')[0].reset();
		return false;
	} );

	$('.aton-form').bind( 'click', function(e){
		return false;
	} );





	// deixa o bg do título do mesmo tamanho que as vantagens
	hotelSobreTituloSameHeight();
	$( window ).resize(function(e) 
	{
		hotelSobreTituloSameHeight();
	});

});

function hotelSobreTituloSameHeight () 
{
	if ($("body").innerWidth() > 767) 
	{
		$('#hotel #titulo').height( $('#hotel .wrap-vantagens').height() );
	}
	else
	{
		$('#hotel #titulo').removeAttr('style');
	}
}