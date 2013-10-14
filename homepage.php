<?php
/*
Template Name: Homepage
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage html5blank
 */
?>
<?php get_header('home'); ?>
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
        <section class="content container center-text" id="store">
            <h1 class="left">RECENT PRODUCTS</h1>
            <aside>
                <a href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><h1 class="shopall">SHOP ALL PRODUCTS &rarr;</h1></a>
            </aside>
<article class="home-products clearfix clear">
                <ul class="center-text">
                <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <li class="onethird">
                        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="380px" height="380px" />'; ?>

                            <h3><?php the_title(); ?></h3>

                               <span class="price"><?php echo $product->get_price_html(); ?></span>

                        </a>

                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    </ul>
</article>
</section>

<?php get_footer(); ?>