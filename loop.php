<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article class="blog-entry" id="post-<?php the_ID(); ?>">
	
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<header>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <h1><?php the_title(); ?></h1>
          </a>
          <span class="meta"><?php the_time('F j, Y') ?> Posted in: <?php the_category(', '); ?>, <?php the_tags('Tagged: ', ', ', ''); ?> by <?php the_author() ?></span> 
        </header>
		
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		
		<hr>
          <span class="comments-link">
            <a href="<?php comments_link(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></a> | <a href="<?php the_permalink() ?>#respond">Leave a Comment</a>
            <?php edit_post_link('Edit Post', ' | ' ); ?>
          </span>
		
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>