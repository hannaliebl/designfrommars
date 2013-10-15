<?php get_header(); ?>

	<section class="content" role="main">
		<div class="container960">
	
		<?php _e( 'Showing Posts Filed Under: ', 'html5blank' ); the_category(' '); ?>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>

		</div>
	
	</section>
	

<?php get_footer(); ?>