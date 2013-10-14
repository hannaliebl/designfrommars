<?php
/**
 * The Template for displaying product search, rewritten...based on documentation from here: http://docs.woothemes.com/document/overriding-the-product-search-box-widget/.
 *
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

?>


<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
			<div class="product-search">
				<label class="screen-reader-text" for="s"><?php _e( '', 'woocommerce' ); ?></label>
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search for products', 'woocommerce' ); ?>" />
				<input type="submit" id="searchsubmit" value="<?php echo esc_attr__( 'Search' ); ?>" />
				<input type="hidden" name="post_type" value="product" />
			</div>
		</form>