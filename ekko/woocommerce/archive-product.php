<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

$shop_columns = $shop_sidebar = '';
if ( '' == ekko_get_option( 'tek-woo-shop-columns' ) ) {
	$shop_columns = 'woo-3-columns';
} else {
	$shop_columns = ekko_get_option( 'tek-woo-shop-columns' );
}

if ( ekko_get_option( 'tek-woo-sidebar-position' ) ) {
	$shop_sidebar = ekko_get_option( 'tek-woo-sidebar-position' );
}
?>


<section>
	<div class="ShopFiltersWrapper">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>
		</div>
	</div>
	<div class="container">
		<?php if (isset($shop_columns) && isset($shop_sidebar)) : ?>
			<?php if ($shop_columns == 'woo-2-columns' && $shop_sidebar == 'woo-sidebar-left') : ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="woo-sidebar woo-sidebar-left">
						<?php dynamic_sidebar('shop-sidebar'); ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (isset($shop_columns)) : ?>
			<?php if ($shop_columns != 'woo-2-columns') : ?>
	  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 <?php echo esc_attr($shop_columns); ?>">
			<?php else : ?>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 woo-2-columns">
			<?php endif; ?>
		<?php endif; ?>
			<?php woocommerce_product_loop_start(); ?>
				<?php woocommerce_product_subcategories(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php wc_get_template_part( 'content', 'product' ); ?>
				<?php endwhile; // end of the loop. ?>
			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
				<?php wc_get_template( 'loop/no-products-found.php' ); ?>
			<?php endif; ?>
		</div>
		<?php if (isset($shop_columns) && isset($shop_sidebar)) : ?>
			<?php if ($shop_columns == 'woo-2-columns' && $shop_sidebar == 'woo-sidebar-right') : ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="woo-sidebar woo-sidebar-right">
						<?php dynamic_sidebar('shop-sidebar'); ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</section>
<?php get_footer();
