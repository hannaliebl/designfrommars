<?php get_header(); ?>
	
	<section class="content" role="main">
		<div class="container960">
	
		<?php _e( 'Showing Posts Tagged: ', 'html5blank' ); echo single_tag_title('', false); ?>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
		</div>
	</section>
	

<?php get_footer(); ?>