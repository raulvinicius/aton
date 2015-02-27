<?php 

function codex_custom_init() {
	$labelsAcomodacoes = array(
		'name' => _x('Acomodações', 'nome plural do tipo de post'),
		'singular_name' => _x('Acomodação', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Acomodação', 'acomodacoes'),
		'add_new_item' => __('Adicionar Acomodação'),
		'edit_item' => __('Editar Acomodação'),
		'new_item' => __('Nova Acomodação'),
		'all_items' => __('Todas as Acomodações'),
		'view_item' => __('Ver Acomodação'),
		'search_items' => __('Procurar por Acomodação'),
		'not_found' =>  __('Nenhuma Acomodação foi encontrada'),
		'not_found_in_trash' => __('Não há Acomodações na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Acomodações'

	);
	$argsAcomodacoes = array(
		'labels' => $labelsAcomodacoes,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('acomodacoes',$argsAcomodacoes);





	$labelsQuartos = array(
		'name' => _x('Quartos', 'nome plural do tipo de post'),
		'singular_name' => _x('Quarto', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Quarto', 'quartos'),
		'add_new_item' => __('Adicionar Quarto'),
		'edit_item' => __('Editar Quarto'),
		'new_item' => __('Novo Quarto'),
		'all_items' => __('Todos os Quartos'),
		'view_item' => __('Ver Quarto'),
		'search_items' => __('Procurar por Quarto'),
		'not_found' =>  __('Nenhum Quarto foi encontrado'),
		'not_found_in_trash' => __('Não há Quartos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Quartos'

	);
	$argsQuartos = array(
		'labels' => $labelsQuartos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('quartos',$argsQuartos);





	$labelsDepoimentos = array(
		'name' => _x('Depoimentos', 'nome plural do tipo de post'),
		'singular_name' => _x('Depoimento', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Depoimento', 'depoimentos'),
		'add_new_item' => __('Adicionar Depoimento'),
		'edit_item' => __('Editar Depoimento'),
		'new_item' => __('Novo Depoimento'),
		'all_items' => __('Todos os Depoimentos'),
		'view_item' => __('Ver Depoimento'),
		'search_items' => __('Procurar por Depoimento'),
		'not_found' =>  __('Nenhum Depoimento foi encontrado'),
		'not_found_in_trash' => __('Não há Depoimentos na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Depoimentos'

	);
	$argsDepoimentos = array(
		'labels' => $labelsDepoimentos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array( 'title' )
	); 
	register_post_type('depoimentos',$argsDepoimentos);








}
add_action( 'init', 'codex_custom_init' );




// if ( function_exists( 'add_image_size' ) ) 
// {
// 	add_image_size( 'foto-destaque', 360, 300, true );
// 	add_image_size( 'zoom-destaque', 240, 300, true );
// 	add_image_size( 'tb-lista', 220, 215, true );
// 	add_image_size( 'tb-foto', 102, 100, true );
// 	add_image_size( 'foto', 470, 460, true );
// }

function get_post_by_type($type)
{
	$args = array( 'post_type' => $type, 'posts_per_page' => -1 );
	return new WP_Query( $args );
}


function change_default_title( $title ){

    $screen = get_current_screen();

    if ( 'depoimentos' == $screen->post_type )
    {
        $title = 'Autor do depoimento';
    }
    else if ( 'quartos' == $screen->post_type )
    {
        $title = 'Nome do quarto';
    }
    else if ( 'acomodacoes' == $screen->post_type )
    {
        $title = 'Nome da acomodação';
    }

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );
