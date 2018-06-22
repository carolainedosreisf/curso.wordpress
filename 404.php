<?php 
//pagina de erro
get_header(); 
//imagem do header
?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">

					<div class="404 col-md-9">

					<header>
						<h1>Página não encontrada</h1>
						<p>Infelizmente, a página que você tentou acessar não existe neste site!</p>
					</header>

					<div class="erro">
						<p>Que tal fazer uma pesquisa?</p>
						<?php get_search_form(); ?>

						<h2>Últimos posts</h2>
						<p>Veja os nossos últimos conteúdos</p>
						<?php the_widget('WP_Widget_Recent_Posts', array('title' => 'ultimos posts', 'number' => 10)); ?>


					</div>


					</div>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>