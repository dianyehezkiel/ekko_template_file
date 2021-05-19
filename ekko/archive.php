<?php
/**
 * The template for displaying Archive pages.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package ekko
 * by KeyDesign
 */

 get_header(); ?>

<?php
  $kd_post_content = $blog_template_class = $page_layout = $sticky_sidebar = $blog_active_widgets = $blog_sidebar = $blog_template = '';

  $blog_sidebar = ekko_get_option( 'tek-blog-sidebar' );
  $blog_template = ekko_get_option( 'tek-blog-template' );

  if ( '' == $blog_sidebar ) {
		$blog_sidebar = 1;
	}

  if( !class_exists( 'ReduxFramework' ) ) {
    $kd_post_content .= "img-top-list";
  } elseif ( '' != $blog_template ) {
    $kd_post_content .= $blog_template;
    $blog_template_class .= 'blog-'.$blog_template;
  }

  if ( $blog_sidebar ) {
    $page_layout = "use-sidebar";
  }

  if ( ekko_get_option( 'tek-blog-listing-sticky-sidebar' ) ) {
    $sticky_sidebar = 'post-sticky-sidebar';
  }

  $blog_active_widgets = is_active_sidebar( 'blog-sidebar' );
?>

<div id="posts-content" class="container <?php echo esc_attr( $page_layout ); ?> <?php echo esc_attr( $blog_template_class ); ?>" >
	<?php if ( $blog_sidebar && $blog_active_widgets ) { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8">
	<?php } else { ?>
		<div class="col-xs-12 col-sm-12 col-lg-8 BlogFullWidth">
	<?php } ?>
	<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'core/templates/post/blog', $kd_post_content );

			endwhile;

      /* Numeric posts pagination */
			ekko_numeric_posts_nav();

		else :

			get_template_part( 'core/templates/post/content', 'none' );

		endif;
	?>
	</div>
  <?php if ( $blog_sidebar && $blog_active_widgets ) : ?>
    <div class="col-xs-12 col-sm-12 col-lg-4 <?php echo esc_attr( $sticky_sidebar ); ?>">
      <div class="right-sidebar">
		     <?php get_sidebar(); ?>
      </div>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
