<?php /**
 * The template for displaying the navigation area for Portfolio post types
 */ ?>

<div class="row portfolio-navigation-links col-lg-12">
  <div class="container">
     <div class="port-nav-prev col-sm-6 col-lg-6">
       <?php
          $prev_post = get_adjacent_post(false, '', true);
          if ( !empty( $prev_post ) ) {
            echo '<a class="port-prev tt_button" href="' . esc_url( get_permalink( $prev_post->ID ) ) . '" title="' . esc_attr( $prev_post->post_title ) . '"><span class="arrow"></span>' . apply_filters( 'ekko_portfolio_prev_btn', esc_html__("Previous", "ekko") ) . '</a>';
          }
        ?>
      </div>
      <div class="port-nav-next col-sm-6 col-lg-6">
        <?php $next_post = get_adjacent_post(false, '', false);
          if( !empty( $next_post ) ) {
            echo '<a class="port-next tt_button" href="' . esc_url( get_permalink( $next_post->ID ) ) . '" title="' . esc_attr( $next_post->post_title ) . '">' . apply_filters( 'ekko_portfolio_next_btn', esc_html__("Next", "ekko") ) . '<span class="arrow"></span></a>';
          }
        ?>
      </div>
  </div>
</div>
