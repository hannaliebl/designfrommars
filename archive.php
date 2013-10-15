<?php get_header(); ?>
	

	<section class="content" role="main">
		<div class="container960">
	
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
		</div>
	</section>

<?php get_footer(); ?>