<?php 
if( is_active_sidebar('sidebar-1')){
	dynamic_sidebar('sidebar-1');
}

/*mostra o formulario na barra lateral da pagina home, para isso baixamos o black studio TinyMCE Widget e o contact form 7, no site do wordpress*/

echo do_shortcode('[contact-form-7 id="113" title="Formulário Sidebar"]');