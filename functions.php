<?php 

//chmando o nosso aquivo customizer.php
require get_template_directory() . '/inc/customizer.php';

// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
	)
);

// Adicionando suporte ao tema
add_theme_support('custom-background'); //fundo
add_theme_support('custom-header'); //imagem de header
add_theme_support('post-thumbnails'); //imagem destacada
add_theme_support('post-formats', array('video', 'image')); //formatos difrentes de posts
add_theme_support('html5', array('search-form')); //search-form em html5
add_theme_support('custom-logo', array( //logo
	'height' => 100,
	'widht' => 200
));

// Registrando sidebars(barra lateral)
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
}


// Alterar o número de itens por página no blog

function num_itens_blog( $query ){
	if( is_admin() || ! $query->is_main_query() )
	return;

	// Página blog
	if ( is_home() ){
		$query->set( 'posts_per_page', 2 );
		return;
	}
}

add_action( 'pre_get_posts', 'num_itens_blog', 1 );

/*baixamos o plugin o social icons widget, que na verdade é um widget agora vamos fazer ele aparecer como um widget*/
register_sidebar(
	array(
		'name'		=> 'Redes sociais',
		'id'		=> 'redes-sociais',
		'description'	=> 'Widgts para redes sociais',
		'before_widget'	=> '<div class="widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget-titulo">',
		'after_title'	=> '</h2>',			
	)
);

//shortcodes para mostrar o telefone na página de contato

function mostra_telefone(){
	if(wp_is_mobile()){
		$resultado = '<divc lass="telefone"><p>Ligue agora<a href="tel:04499999999"> 0449999-9999</a></p></div> ';
	}
	return $resultado;
}

add_shortcode('meutelefone','mostra_telefone');