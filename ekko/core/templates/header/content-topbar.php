<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$social_icon_class = $content_to_display = $topbar_left_content_escaped = $topbar_right_content_escaped = $topbar_content_design = $topbar_left_empty = $topbar_right_empty = '';

if ( ! function_exists( 'ekko_topbar_content' ) ) {
	function ekko_topbar_content ( $topbar_section ) {
		$section_content  = '';
		$content_to_display = ekko_get_option( $topbar_section );

		if ( 'contact-info' === $content_to_display ) {
      $section_content = '<div class="topbar-contact">';
      if ( '' != ekko_get_option( 'tek-business-phone' ) ) {
          $section_content .= '<span class="topbar-phone"><a href="tel:'. esc_attr( ekko_get_option( 'tek-business-phone' ) ) .'"><i class="fas fa-phone-alt"></i><span>'. esc_html( ekko_get_option( 'tek-business-phone' ) ) .'</span></a></span>';
      }
			if ( '' != ekko_get_option( 'tek-secondary-business-phone' ) ) {
          $section_content .= '<span class="topbar-phone"><a href="tel:'. esc_attr( ekko_get_option( 'tek-secondary-business-phone' ) ) .'"><i class="fas fa-mobile-alt"></i><span>'. esc_html( ekko_get_option( 'tek-secondary-business-phone' ) ) .'</span></a></span>';
      }
      if ( '' != ekko_get_option( 'tek-business-email' ) ) {
          $section_content .= '<span class="topbar-email"><a href="mailto:'. esc_attr( ekko_get_option( 'tek-business-email' ) ) .'"><i class="far fa-envelope"></i><span>'. esc_html( ekko_get_option( 'tek-business-email' ) ) .'</span></a></span>';
      }
      if ( '' != ekko_get_option( 'tek-business-opening-hours' ) ) {
          $section_content .= '<span class="topbar-opening-hours"><i class="far fa-clock"></i><span>'. esc_html( ekko_get_option( 'tek-business-opening-hours' ) ) .'</span></span>';
      }
      $section_content .= '</div>';
		} elseif ( 'social-links' === $content_to_display ) {
      $section_content = '<div class="topbar-socials">';
      if( class_exists( 'ReduxFramework' )) {
        $section_content .= do_shortcode('[social_profiles]');
      }
      $section_content .= '</div>';
		} elseif ( 'navigation' === $content_to_display ) {
      $section_content = '<div class="topbar-menu">';
      if ( has_nav_menu( 'topbar-menu' ) ) {
          $section_content .= wp_nav_menu( array( 'theme_location' => 'topbar-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'navbar-topbar', 'fallback_cb' => 'false', 'echo' => false ) );
      }
      $section_content .= '</div>';
		}

		return $section_content;
	}
}

if ( 'empty' != ekko_get_option( 'tek-topbar-content-design' ) ) {
	$topbar_content_design = ekko_get_option( 'tek-topbar-content-design' );
}

$topbar_left_content_escaped = ekko_topbar_content( 'tek-topbar-left-content' );
$topbar_right_content_escaped = ekko_topbar_content( 'tek-topbar-right-content' );

if ( ekko_get_option( 'tek-topbar-left-content' ) == 'empty' ) {
	$topbar_left_empty = 'content-empty';
}
if ( ekko_get_option( 'tek-topbar-right-content' ) == 'empty' ) {
	$topbar_right_empty = 'content-empty';
}
?>

<?php if ( ekko_get_option( 'tek-topbar' ) ) : ?>
  <?php if ( 'empty' != ekko_get_option( 'tek-topbar-left-content' ) || 'empty' != ekko_get_option( 'tek-topbar-right-content' ) ) : ?>
	<div class="topbar <?php echo esc_attr($topbar_content_design); if ( ekko_get_option( 'tek-topbar-mobile' ) ) echo ' visible-on-mobile';  ?>">
		<div class="container">
			<div class="topbar-left-content <?php echo esc_attr($topbar_left_empty); ?>">
				<?php
				// This variable ($topbar_left_content_escaped) has been safely escaped in the following file: ekko/core/templates/header/content-topbar.php Lines: 10-44
				?>
				<?php echo $topbar_left_content_escaped; ?>
			</div>
			<div class="topbar-right-content <?php echo esc_attr($topbar_right_empty); ?>">
				<?php
				// This variable ($topbar_right_content_escaped) has been safely escaped in the following file: ekko/core/templates/header/content-topbar.php Lines: 10-44
				?>
				<?php echo $topbar_right_content_escaped; ?>
			</div>
			<?php if ( ekko_get_option( 'tek-topbar-search' ) == 1 || ekko_get_option( 'tek-topbar-lang-switcher' ) == 1 || ekko_get_option( 'tek-woo-display-cart-icon' ) == '1' ) : ?>
				<div class="topbar-extra-content">
	        <?php if( ekko_get_option( 'tek-topbar-search' ) == 1 ) : ?>
	            <div class="topbar-search">
	               <span class="toggle-search fa-search fa"></span>
	               <div class="topbar-search-container">
	                 <?php ekko_get_search_form(); ?>
	               </div>
	            </div>
	        <?php endif; ?>

	        <?php if( ekko_get_option( 'tek-topbar-lang-switcher' ) == 1 ) : ?>
	        <?php if ( function_exists('wpml_loaded') ) : ?>
	            <div class="topbar-lang-switcher">
	              <div class="lang-switcher-wpml">
	                <?php do_action( 'wpml_add_language_selector' ); ?>
	              </div>
	            </div>
	        <?php elseif ( class_exists('Polylang') && function_exists('pll_the_languages')) : ?>
	            <div class="topbar-lang-switcher">
	              <ul class="lang-switcher-polylang">
	                <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1) ); ?>
	              </ul>
	            </div>
	        <?php endif; ?>
	        <?php endif; ?>

	        <?php if (class_exists( 'WooCommerce' )) {
	            if(  ekko_get_option( 'tek-woo-display-cart-icon' ) == '1' ) {
	                $keydesign_minicart = '';
	                $keydesign_minicart = ekko_add_cart_in_menu();
	                echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
	            }
	        } ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
  <?php endif; ?>
<?php endif; ?>
