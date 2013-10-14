<?php get_header(); ?>
<section class="content container" id="intro" role="main">
            <div class="container960 clearfix">

            <div class="onethird">
                <h1>LOREM IPSUM</h1>
            </div>
            <div class="twothirds">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="onethird">
                <h1>DOLOR SIT</h1>
            </div>
            <div class="twothirds">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="onethird">
                <h1>CONSECTETUR</h1>
            </div>
            <div class="twothirds">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
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