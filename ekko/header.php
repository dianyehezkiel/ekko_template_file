<?php
/**
 * Theme header
 * @package ekko
 * by KeyDesign
 */
 ?>

<?php

  $wrapper_class = $navbar_class = $main_menu_class = $hide_title_section_class = $disable_animations_class = $button_hover_class =
  $nav_full_class = $fixed_menu_class = $enable_topbar_class = $sticky_topbar_class = $secondary_logo_class =
  $trans_sec_logo_class = $main_nav_alignment = $single_post_template = $dropdown_hover_effect = $header_bttns_wrapper = $enable_topbar_mobile = '';

  $themetek_page_showhide_title_section = get_post_meta( get_the_ID(), '_themetek_page_showhide_title_section', true );
  if ($themetek_page_showhide_title_section && !is_search()) {
    $hide_title_section_class = 'hide-title-section';
  }

  if ( ekko_get_option( 'tek-disable-animations' ) == true ) {
    $disable_animations_class = 'no-mobile-animation';
  }

  if ( '' != ekko_get_option( 'tek-btn-effect' ) ) {
    $button_hover_class = ekko_get_option( 'tek-btn-effect' );
  }

  if ( ekko_get_option( 'tek-menu-style' ) == '2') {
    $nav_full_class = 'full-width';
  }

  if ( ekko_get_option( 'tek-menu-behaviour' ) == '2') {
    $fixed_menu_class = 'fixed-menu';
  }

  if ( ekko_get_option( 'tek-topbar' ) == '1') {
    $enable_topbar_class = 'with-topbar';
  }

  if ( ekko_get_option( 'tek-topbar' ) == '1' && ekko_get_option( 'tek-topbar-mobile' ) == '1') {
    $enable_topbar_mobile = 'with-topbar-mobile';
  }

  if ( ekko_get_option( 'tek-topbar-sticky' ) == '1') {
    $sticky_topbar_class = 'with-topbar-sticky';
  }

  if ( ekko_get_option( 'tek-sticky-nav-logo' ) == 'nav-secondary-logo') {
    $secondary_logo_class = 'nav-secondary-logo';
  }

  if ( ekko_get_option( 'tek-transparent-nav-logo' ) == 'nav-secondary-logo' ) {
    $trans_sec_logo_class = 'nav-transparent-secondary-logo';
  }

  if ( ekko_get_option( 'tek-menu-alignment' ) == 'main-nav-left') {
    $main_nav_alignment = 'main-nav-left';
  } elseif (  ekko_get_option( 'tek-menu-alignment' ) == 'main-nav-center' ) {
    $main_nav_alignment = 'main-nav-center';
  } elseif ( ekko_get_option( 'tek-menu-alignment' ) == 'main-nav-right' ) {
    $main_nav_alignment = 'main-nav-right';
  } else {
    $main_nav_alignment = 'main-nav-right';
  }

  if ( ekko_get_option( 'tek-single-post-template' ) && is_singular('post')) {
		$single_post_template =  ekko_get_option( 'tek-single-post-template' );
	}

  if ( '' != ekko_get_option( 'tek-dropdown-nav-hover' ) ) {
    $dropdown_hover_effect = ekko_get_option( 'tek-dropdown-nav-hover' );
  } else {
    $dropdown_hover_effect = 'default-dropdown-effect';
  }

  if ( ekko_get_option( 'tek-modal-button' ) || ekko_get_option( 'tek-panel-button' ) ) {
    $header_bttns_wrapper = true;
  }

  $wrapper_class = implode(' ', array($hide_title_section_class, $disable_animations_class, $button_hover_class, $single_post_template));
  $navbar_class = implode(' ', array('navbar', 'navbar-default', 'navbar-fixed-top', $button_hover_class, $nav_full_class, $fixed_menu_class, $enable_topbar_class, $enable_topbar_mobile, $sticky_topbar_class, $secondary_logo_class, $trans_sec_logo_class ));
  $main_menu_class = implode(' ', array('collapse', 'navbar-collapse', $dropdown_hover_effect));
?>
<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
   <head>
      <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>" />
      <?php wp_head(); ?>
   </head>
    <body <?php body_class();?>>
      <?php wp_body_open(); ?>
      <nav class="<?php echo esc_attr( trim( $navbar_class ) ); ?>" >
        <?php /* Topbar template */ ?>
        <?php if ( ekko_get_option( 'tek-topbar' ) == 1 ) : ?>
          <?php get_template_part( 'core/templates/header/content', 'topbar' ); ?>
        <?php endif; ?>
        <?php /* END Topbar template */ ?>

        <?php
          $primary_logo = ekko_get_option( 'tek-logo' );
          $secondary_logo = ekko_get_option( 'tek-logo2' );
          $logo_size = ekko_get_option( 'tek-logo-image-size' );
          $text_logo = ekko_get_option( 'tek-text-logo' );
        ?>

        <div class="menubar <?php echo esc_attr($main_nav_alignment); ?>">
          <div class="container">
           <div id="logo">
             <?php if ( '' != ekko_get_option( 'tek-logo-style' ) ) : ?>
               <?php if ( ekko_get_option( 'tek-logo-style' ) == '1') : ?>
                 <?php /* Image logo */ ?>
                 <a class="logo" href="<?php echo esc_url(home_url()); ?>">
                   <?php if ( isset( $primary_logo['url'] ) && '' != $primary_logo['url'] ) { ?>
                     <img class="fixed-logo" src="<?php echo esc_url( $primary_logo['url'] ); ?>" <?php if ( isset( $logo_size ) && '' != $logo_size ) { echo 'width="' . esc_attr( $logo_size ) .'"'; }?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />

                     <?php if ( isset( $secondary_logo['url'] ) && '' != $secondary_logo['url'] ) { ?>
                     <img class="nav-logo" src="<?php echo esc_url( $secondary_logo['url'] ); ?>" <?php if ( isset( $logo_size ) && '' != $logo_size ) { echo 'width="' . esc_attr( $logo_size ) .'"'; }?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                     <?php } ?>

                   <?php } else { ?>
                     <img class="fixed-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo.png'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                     <img class="nav-logo" src="<?php echo esc_url(get_template_directory_uri() . '/core/assets/images/logo-2.png'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                   <?php } ?>
                 </a>
               <?php elseif ( ekko_get_option( 'tek-logo-style' ) == '2') : ?>
                 <?php /* Text logo */ ?>
                 <a class="logo" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_html( ekko_get_option( 'tek-text-logo' ) );?></a>
               <?php endif; ?>
             <?php endif; ?>
             <?php if ( !class_exists( 'ReduxFramework' ) ) : ?>
                <a class="logo blog-info-name" href="<?php echo esc_url(site_url()); ?>"><?php bloginfo( 'name' ); ?></a>
             <?php endif; ?>
           </div>
           <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <div class="mobile-cart">
                      <?php if ( ekko_get_option( 'tek-woo-display-cart-icon' ) == '1' ) {
                          if ( class_exists( 'WooCommerce' ) ) {
                              $keydesign_minicart = '';
                              $keydesign_minicart = ekko_add_cart_in_menu();
                              echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
                          }
                        } ?>
                    </div>
                    <?php if( ekko_get_option( 'tek-topbar-search' ) == 1 ) : ?>
                        <div class="topbar-search mobile-search">
                           <span class="toggle-search fa-search fa"></span>
                           <div class="topbar-search-container">
                             <?php ekko_get_search_form(); ?>
                           </div>
                        </div>
                    <?php endif; ?>
            </div>
            <div id="main-menu" class="<?php echo esc_attr( trim( $main_menu_class ) ); ?>">
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
            </div>
            <div class="main-nav-extra-content">
              <div class="search-cart-wrapper">
                <?php if ( ekko_get_option( 'tek-topbar' ) == '0' ) {
                      if ( ekko_get_option( 'tek-topbar-search' ) == '1' ) { ?>
                        <div class="topbar-search">
                           <span class="toggle-search fa-search fa"></span>
                           <div class="topbar-search-container">
                             <?php ekko_get_search_form(); ?>
                           </div>
                        </div>
                    <?php }
                } ?>
                <?php if ( class_exists( 'WooCommerce' ) ) {
                  if ( ekko_get_option( 'tek-topbar' ) == '0' ) {
                    if ( ekko_get_option( 'tek-woo-display-cart-icon' ) == '1' ) {
                      $keydesign_minicart = '';
                      $keydesign_minicart = ekko_add_cart_in_menu();
                      echo do_shortcode( shortcode_unautop( $keydesign_minicart ) );
                    }
                  }
                } ?>
              </div>
              <?php if ( $header_bttns_wrapper ) : ?>
                <div class="header-bttn-wrapper">
                    <?php if ( ekko_get_option( 'tek-modal-button' ) ) {
                        get_template_part( 'core/templates/header/content', 'modal-button' );
                    } ?>
                    <?php if ( ekko_get_option( 'tek-panel-button' ) ) {
                        get_template_part( 'core/templates/header/content', 'panel-button' );
                    } ?>
                </div>
              <?php endif; ?>
            </div>
            </div>
         </div>
      </nav>

      <div id="wrapper" class="<?php echo esc_attr( trim( $wrapper_class ) ); ?>">
        <?php if (is_home() && ekko_get_option( 'tek-blog-header-template' ) == 'blog-header-revslider') {
            if ( '' != ekko_get_option( 'tek-blog-header-slider-alias' ) ) : ?>
             <div id="kd-blog-slider" class="container">
                <?php echo do_shortcode('[rev_slider alias="'. esc_attr( ekko_get_option( 'tek-blog-header-slider-alias') ). '"]' ); ?>
             </div>
           <?php endif; ?>
        <?php } else {
            get_template_part( 'core/templates/header/content', 'title-bar' );
          }
        ?>
