<?php
/**
 * The template used for displaying tags for single Blog posts
 */
 ?>
<?php
  $meta_tags = ekko_get_option( 'tek-post-meta-tags' );
  if( ! class_exists( 'ReduxFramework' ) ) {
    $meta_tags = true;
  }
?>

 <?php
  if ( $meta_tags ) {
   the_tags(
       '<div class="tags">',
       ' ',
       '</div>'
   );
 }
 ?>
