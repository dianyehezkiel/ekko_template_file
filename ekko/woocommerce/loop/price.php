<?php
/**
 * Loop Price
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version   1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<div class="categories"><?php echo wc_get_product_category_list( $product->get_id() ); ?></div>
<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo '<span class="price-wrapper">' . $price_html . '</span>'; ?></span>
<?php endif; ?>
