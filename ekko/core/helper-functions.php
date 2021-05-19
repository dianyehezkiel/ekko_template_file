<?php
/**
 * Helper functions for Ekko Theme.
 *
 * @package Ekko
 * @since 1.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Fire the wp_body_open action. Backward compatibility for WordPress versions < 5.2
 */
 if ( ! function_exists( 'wp_body_open' ) ) {
 	function wp_body_open() {
 		do_action( 'wp_body_open' );
   }
 }

/**
 * Return Theme options.
 */
 if ( ! function_exists( 'ekko_get_option' ) ) {
  function ekko_get_option( $option, $default = '' ) {
 	 global $redux_ThemeTek;
 
 	 if ( empty( $redux_ThemeTek ) ) {
 		 if ( is_multisite() ) {
 			 $redux_ThemeTek = get_blog_option( get_current_blog_id(), 'redux_ThemeTek' );
 		 } else {
 			 $redux_ThemeTek = get_option( 'redux_ThemeTek' );
 		 }
 	 }

 	 if ( ( isset( $redux_ThemeTek[$option] ) && $redux_ThemeTek[$option] === '0') || !empty( $redux_ThemeTek[$option] ) ) {
 		 return $redux_ThemeTek[$option];
 	 } else {
 		 return $default;
 	 }

  }
 }

/**
 * Compress CSS
 */
if ( ! function_exists( 'ekko_compress_css' ) ) {
	function ekko_compress_css( $css = '' ) {
			if ( ! empty( $css ) ) {
				$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
				$css = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
				$css = str_replace( ', ', ',', $css );
			}
			return $css;
	}
}

/**
 * Theme activation option
 */
if ( ! function_exists( 'ekko_activation_option' ) ) {
	function ekko_activation_option() {
		add_option( 'keydesign-verify', 'no', '', false );
		add_option( 'envato_purchase_code_23714045', '', '', false );
	}
}
add_action( 'admin_init', 'ekko_activation_option' );

/**
 * Display search form
 */

 if ( ! function_exists( 'ekko_get_search_form' ) ) {
 	function ekko_get_search_form( $echo = true ) {
 		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<label>
				<span class="screen-reader-text">' . _x( 'Search for:', 'label', 'ekko' ) . '</span>
				<input type="search" class="search-field" placeholder="' . apply_filters( 'ekko_search_field_placeholder', esc_attr_x( 'Search &hellip;', 'placeholder', 'ekko' ) ) . '" value="' . get_search_query() . '" name="s" role="search" />';
				if ( 'search-all' != ekko_get_option( 'tek-search-form-content' ) && '' != ekko_get_option( 'tek-search-form-content' ) ) {
					$form .= '<input type="hidden" name="post_type" value="' . ekko_get_option( 'tek-search-form-content' ) . '">';
				}
			$form .= '</label>
			<input type="submit" class="search-submit" value="">
		</form>';

		$result_escaped = apply_filters( 'ekko_get_search_form', $form );

		if ( null === $result_escaped ) {
			$result_escaped = $form;
		}

		// The $result_escaped variable has been safely escaped

		if ( $echo ) {
			echo $result_escaped;
		} else {
			return $result_escaped;
		}

 	}
 }

/**
 * Allowed HTML tags
 */
if ( ! function_exists( 'ekko_allowed_html_tags' ) ) {
	function ekko_allowed_html_tags() {
		$allowed_tags = array(
			 'a' => array(
				 'class' => array(),
				 'href'  => array(),
				 'rel'   => array(),
				 'title' => array(),
				 'target' => array(),
			 ),
			 'b' => array(),
			 'br' => array(),
			 'div' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'em' => array(),
			 'h1' => array(),
			 'h2' => array(),
			 'h3' => array(),
			 'h4' => array(),
			 'h5' => array(),
			 'h6' => array(),
			 'i' => array(),
			 'img' => array(
				 'alt'    => array(),
				 'class'  => array(),
				 'height' => array(),
				 'src'    => array(),
				 'width'  => array(),
			 ),
			 'p' => array(
				 'class' => array(),
			 ),
			 'span' => array(
				 'class' => array(),
				 'title' => array(),
				 'style' => array(),
			 ),
			 'strong' => array(),
		 );

		 return $allowed_tags;
	 }
 }
