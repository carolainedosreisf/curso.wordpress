<footer>
	<div class="container">
		<div class="row">
			<div class="copyright col-md-12 text-center"><p>
				<?php /*função que permite editar o copyright dentro do personalizador do wordpress  mas para isso é preciso ter criado o arquivo customizer.php que esta sendo puxado pelo function.php */
				echo get_theme_mod('set_copyright'); ?>
			</p></div>
			
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
