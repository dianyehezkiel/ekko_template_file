<?php
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	// Remove WooCommerce enqueued styles
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

	// Remove WooCommerce prettyPhoto
	if( ! function_exists( 'ekko_remove_woo_scripts' ) ) {
		function ekko_remove_woo_scripts() {
		    wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
		    wp_dequeue_script( 'prettyPhoto' );
		    wp_dequeue_script( 'prettyPhoto-init' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'ekko_remove_woo_scripts', 99 );

	if( ! function_exists( 'ekko_remove_customizer' ) ) {
		function ekko_remove_customizer($wp_customize) {
		  $wp_customize->remove_control('woocommerce_catalog_columns');
		}
	}
	add_action('customize_register', 'ekko_remove_customizer', 20, 1);


	// Add product template style to post class
	if( ! function_exists( 'ekko_woo_catalog_style' ) ) {
		function ekko_woo_catalog_style( $classes ) {
			if (!is_admin()) {
				global $product;
				$product_id = wc_get_product();

		    if( $product_id && '' != ekko_get_option( 'tek-woo-catalog-style' ) ) {
	        $classes[] = 'woo-detailed-style';
	    	} elseif ( $product_id ) {
		      $classes[] = ekko_get_option( 'tek-woo-catalog-style' );
				}

	    	return $classes;
			}
		}
	}
	add_filter( 'wc_product_class', 'ekko_woo_catalog_style' );

	// Add wrappers for product listing
	if( ! function_exists( 'ekko_woo_start_image_wrapper' ) ) {
		function ekko_woo_start_image_wrapper() {
		   echo '<div class="woo-entry-image">';
		};
	}
	add_action( 'woocommerce_before_shop_loop_item_title', 'ekko_woo_start_image_wrapper', 5, 2 );

	if( ! function_exists( 'ekko_woo_end_image_wrapper' ) ) {
		function ekko_woo_end_image_wrapper() {
		    echo '</div><div class="woo-entry-wrapper">';
		};
	}
	add_action( 'woocommerce_before_shop_loop_item_title', 'ekko_woo_end_image_wrapper', 12, 2 );

	if( ! function_exists( 'ekko_woo_end_entry_wrapper' ) ) {
		function ekko_woo_end_entry_wrapper() {
		    echo '</div>';
		};
	}
	add_action( 'woocommerce_after_shop_loop_item', 'ekko_woo_end_entry_wrapper', 12, 2 );


	// Return 3 related products
	if( ! function_exists( 'ekko_woo_related_products' ) ) {
		function ekko_woo_related_products( $args ) {
			$args['posts_per_page'] = 3;
			$args['columns'] = 3;
			return $args;
		}
	}
	add_filter( 'woocommerce_output_related_products_args', 'ekko_woo_related_products' );

	// Return number of products in shop page
	if( ! function_exists( 'ekko_loop_shop_per_page' ) ) {
		function ekko_loop_shop_per_page( $product_number ) {
	    $product_number = ekko_get_option( 'tek-woo-products-number' );
		  return $product_number;
		}
	}
	add_filter( 'loop_shop_per_page', 'ekko_loop_shop_per_page' );

	// Move position of related and upsells products
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

	add_action ( 'woocommerce_after_main_content', 'woocommerce_output_related_products', 2);
	add_action ( 'woocommerce_after_main_content', 'woocommerce_upsell_display', 5);

	if( ! function_exists( 'ekko_enqueue_woocommerce' ) ) {
		function ekko_enqueue_woocommerce() {
			wp_enqueue_style( 'keydesign-woocommerce', get_template_directory_uri() . '/core/assets/css/woocommerce.css', array(), null, 'all' );
			wp_register_script( 'keydesign-ajaxcart', get_template_directory_uri() . '/core/assets/js/woocommerce-keydesign.js', array() , null );

			wp_localize_script(
				'keydesign-ajaxcart',
				'keydesign_menucart_ajax',array('nonce' => wp_create_nonce('keydesign-ajaxcart'))
			);
			wp_enqueue_script( 'keydesign-ajaxcart' );
		}
	}
	add_action('wp_enqueue_scripts', 'ekko_enqueue_woocommerce', 98 );

	if( ! function_exists( 'ekko_get_cart_items' ) ) {
		function ekko_get_cart_items() {
			global $woocommerce;

			if ( is_object( $woocommerce ) && isset( $woocommerce->cart ) && method_exists( $woocommerce->cart, 'get_cart' ) ) {
				$articles = sizeof( $woocommerce->cart->get_cart() );
				$cart = $items_total = '';

				if (  $articles > 0 ) {
					$items_total = $woocommerce->cart->cart_contents_count;
					foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
							$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
							$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
							$product_price = apply_filters( 'woocommerce_cart_item_price', $woocommerce->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

							$cart .= '<li class="cart-item-list clearfix">';
							if ( ! $_product->is_visible() ) {
								$cart .= str_replace( array( 'http:', 'https:' ), '', $thumbnail );
							} else {
								$cart .= '<a class="cart-thumb" href="'.esc_url(get_permalink( $product_id )).'">
											'.str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . '
										</a>';
							}

							$cart .= '<div class="cart-desc"><a class="cart-item" href="'.esc_url(get_permalink( $product_id )).'">' . $product_name . '</a>';
							$cart .= '<span class="product-quantity">'. apply_filters( 'woocommerce_widget_cart_item_quantity',  '<span class="quantity-container">' . sprintf( '%s &times; %s',$cart_item['quantity'] , '</span>' . $product_price ) , $cart_item, $cart_item_key ) . '</span>';
							$cart .= '</div>';
							$cart .= '</li>';
						}
					}

					$cart .= '<li class="subtotal"><span><strong>' . esc_html__('Subtotal:', 'ekko') . '</strong> ' . $woocommerce->cart->get_cart_total() . '</span></li>';
					$cart .= '<li class="buttons clearfix">
								<a href="'.wc_get_cart_url().'" class="tt_button tt_secondary_button btn_primary_color hover_outline_secondary kd_cart_btn">' . apply_filters( 'ekko_mini_cart_view_text', esc_html__("View cart", "ekko") ) . '</a>
								<a href="'.wc_get_checkout_url().'" class="tt_button tt_primary_button btn_primary_color kd_checkout_btn">' . apply_filters( 'ekko_mini_cart_checkout_text', esc_html__("Checkout", "ekko") ) . '</a>
							  </li>';
				} else {
					$cart .= '<li><span class="empty-cart">' . apply_filters( 'ekko_mini_cart_empty_text', esc_html__("Your cart is currently empty.", "ekko") ) . '</span></li>';
				}
				return array('cart' => $cart, 'articles' => $items_total);
			}
		}
	}

	if( ! function_exists( 'ekko_woomenucart_ajax' ) ) {
		function ekko_woomenucart_ajax() {
			$cart = ekko_get_cart_items();
			echo json_encode($cart);
			die();
		}
	}
	add_action( 'wp_ajax_woomenucart_ajax', 'ekko_woomenucart_ajax');
	add_action( 'wp_ajax_nopriv_woomenucart_ajax', 'ekko_woomenucart_ajax' );

	add_action( 'wp_ajax_woomenucart_remove_ajax', 'ekko_woomenucart_remove_ajax');
	add_action( 'wp_ajax_nopriv_woomenucart_remove_ajax', 'ekko_woomenucart_remove_ajax' );
	if ( ! function_exists( 'ekko_woomenucart_remove_ajax' ) ) {
		function ekko_woomenucart_remove_ajax($return) {
			$cart = WC()->cart;
			$item_key = $_POST['item_key'] ? $_POST['item_key'] : 0;

			if($item_key){
				$cart->remove_cart_item( $item_key );
			}

			die();
		}
	}

	if( ! function_exists( 'ekko_add_cart_in_menu' ) ) {
		function ekko_add_cart_in_menu() {
			global $woocommerce;
			$items_total = $woocommerce->cart->cart_contents_count;
			$get_cart_items = ekko_get_cart_items();

			$cart_container = '<ul role="menu" class="drop-menu cart_list product_list_widget keydesign-cart-dropdown">'.((isset($get_cart_items['cart']) && $get_cart_items['cart'] !=='') ? $get_cart_items['cart'] : '<li><span class="empty-cart">' . apply_filters( 'ekko_mini_cart_empty_text', esc_html__("Your cart is currently empty.", "ekko") ) . '</span></li>').'</ul>';
			$cart_items = '<div class="keydesign-cart menu-item menu-item-has-children dropdown">
						      <a href="'.wc_get_cart_url().'" class="dropdown-toggle">
							  <span class="cart-icon-container">';
								if ( ekko_get_option ( 'tek-woo-cart-icon-selector' ) == 'shopping-cart') {
									$cart_items .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>';
								} elseif ( ekko_get_option ( 'tek-woo-cart-icon-selector' ) == 'shopping-bag') {
									$cart_items .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 6v-2c0-2.209-1.791-4-4-4s-4 1.791-4 4v2h-5v18h18v-18h-5zm-7-2c0-1.654 1.346-3 3-3s3 1.346 3 3v2h-6v-2zm10 18h-14v-14h3v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h3v14z"/></svg>';
								} elseif ( ekko_get_option ( 'tek-woo-cart-icon-selector' ) == 'shopping-basket') {
									$cart_items .= '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.558 7l4.701-4.702c.199-.198.46-.298.721-.298.613 0 1.02.505 1.02 1.029 0 .25-.092.504-.299.711l-3.26 3.26h-2.883zm12.001 0h2.883l-4.701-4.702c-.199-.198-.46-.298-.721-.298-.613 0-1.02.505-1.02 1.029 0 .25.092.504.299.711l3.26 3.26zm3.703 4l-.016.041-3.598 8.959h-9.296l-3.597-8.961-.016-.039h16.523zm3.738-2h-24v2h.643c.534 0 1.021.304 1.256.784l4.101 10.216h12l4.102-10.214c.233-.481.722-.786 1.256-.786h.642v-2z"/></svg>';
								}
			$cart_items .= (( $items_total !== 0 ) ? '<span class="badge">'.$items_total.'</span>' : '<span class="badge" style="display: none;"></span>').'</span></a>'. $cart_container.'</div>';
			return $cart_items;
		}
	}
