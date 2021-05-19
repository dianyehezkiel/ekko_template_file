<?php
/**
 * The template used for displaying navigation for single Blog posts
 */
 ?>

 <div class="navigation pagination">
   <?php previous_post_link( '%link', apply_filters( 'ekko_blog_single_prev_btn', esc_html__( "Previous", "ekko" ) ) ); ?>
   <?php next_post_link( '%link', apply_filters( 'ekko_blog_single_next_btn', esc_html__( "Next", "ekko" ) ) ); ?>
 </div>
