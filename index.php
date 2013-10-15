<?php get_header(); ?>
<section class="content container" id="intro" role="main">
            <div class="container960 clearfix">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

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
      </article>

    <?php endwhile; ?>

    <nav>
      <div class="next float"><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div class="previous"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>

            </div>
        </section>
		<section class="content container" id="store">
            <h1>RECENT PRODUCTS</h1>
            <aside>
                <a href="#"><h1 class="shopall">SHOP ALL PRODUCTS</h1></a>
            </aside>
<article class="products clearfix">
                <ul class="center-text">
                <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <li class="onethird">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="380px" height="380px" />'; ?>

                            <h1><?php the_title(); ?></h1>

                        	   <h2><?php echo $product->get_price_html(); ?></h2>

                        </a>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    </ul>
</article>
</section>

<?php get_footer(); ?>