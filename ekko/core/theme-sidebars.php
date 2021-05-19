<?php
// ------------------------------------------------------------------------
// Register widgetized areas
// ------------------------------------------------------------------------

  if( ! function_exists( 'ekko_sidebars_register' ) ) {
    function ekko_sidebars_register() {
  		register_sidebar(
        array(
          'name' => esc_html__( 'Blog Sidebar', 'ekko' ),
          'id' => 'blog-sidebar',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the blog sidebar area. If none added, default sidebar widgets will be used.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Shop Sidebar', 'ekko' ),
          'id' => 'shop-sidebar',
          'class' => '',
          'description' => esc_html__( 'A sidebar that only appears on WooCommerce Shop pages.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      if ( class_exists( 'bbPress' ) ) {
        register_sidebar(
          array(
            'name' => esc_html__( 'bbPress Sidebar', 'ekko' ),
            'id' => 'bbpress-sidebar',
            'class' => '',
            'description' => esc_html__( 'A sidebar that only appears on bbPress pages.', 'ekko' ),
            'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title"><span>',
            'after_title' => '</span></h5>',
          )
        );
      }

      register_sidebar(
        array(
          'name' => esc_html__( 'Page Sidebar', 'ekko' ),
          'id' => 'page-sidebar',
          'class' => '',
          'description' => esc_html__( 'Add widgets for the single page sidebar area.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="blog_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer first widget area', 'ekko' ),
          'id' => 'footer-first-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add one widget for the first footer widget area.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer second widget area', 'ekko' ),
          'id' => 'footer-second-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add one widget for the second footer widget area.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer third widget area', 'ekko' ),
          'id' => 'footer-third-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add one widget for the third footer widget area.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );

      register_sidebar(
        array(
          'name' => esc_html__( 'Footer fourth widget area', 'ekko' ),
          'id' => 'footer-fourth-widget-area',
          'class' => '',
          'description' => esc_html__( 'Add one widget for the fourth footer widget area.', 'ekko' ),
          'before_widget' => '<div id="%1$s" class="footer_widget widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h5 class="widget-title"><span>',
          'after_title' => '</span></h5>',
        )
      );
    }
  }

  add_action( 'widgets_init', 'ekko_sidebars_register' );
