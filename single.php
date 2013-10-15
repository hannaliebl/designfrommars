<?php get_header(); ?>
		<section class="content container" id="intro" role="main">
            <div class="container960">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		 <article class="blog-entry" id="post-<?php the_ID(); ?>">
        <header>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <h1><?php the_title(); ?></h1>
          </a>
          <span class="meta"><?php the_time('F j, Y') ?> Posted in: <?php the_category(', '); ?>, <?php the_tags('Tagged: ', ', ', ''); ?> by <?php the_author() ?></span> 
        </header>
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        <hr>
          <span class="comments-link">
            <a href="<?php comments_link(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></a> | <a href="<?php the_permalink() ?>#respond">Leave a Comment</a>
            <?php edit_post_link('Edit Post', ' | ' ); ?>
          </span>
			
			<?php comments_template(); ?>
			
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
	
	<?php endif; ?>
	</div>
	</section>

<?php get_footer(); ?>