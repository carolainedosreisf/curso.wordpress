<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width"><?php //tag meta para ler o tamanho da tela do dispositivo ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


<header>
	<div class="barra-topo">
		<div class="container">
			<div class="row">
				<div class="redes-sociais col-md-10 col-sm-10 col-xs-6">
					<?php //codigo para mostrar as redes sociais, com o plugins baixado(social icons widget)
						if(is_active_sidebar('redes-sociais')){
							dynamic_sidebar('redes-sociais');
						}
					?>
				</div>
				<div class="pesquisa col-md-2 col-sm-2 col-xs-6 text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

	</div>

	<div class="area-menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-3 col-sm-3 text-center">
					<?php //codigo junto com o arquivo functions.php, para adicionar o logo dentro do wordpress
						the_custom_logo();
					 ?>
				</div>
				<div class="menu-principal col-md-9 text-right">
					<?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal') ); ?>
				</div>
			</div>
		</div>
	</div>
	
</header>
