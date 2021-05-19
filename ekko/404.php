<?php
/**
 * The template for displaying 404 pages (Not Found)
 * @package ekko
 * by KeyDesign
 */

get_header(); ?>

<section class="page-404">
	<div class="container">
	    <div class="row" >
				<h2 class="section-heading"><?php echo ( ekko_get_option( 'tek-404-title' ) ) ? esc_html( ekko_get_option( 'tek-404-title' ) ) : _e( 'Page 404', 'ekko' ); ?></h2>
				<?php if ( ekko_get_option( 'tek-404-subtitle' )) : ?>
	        <p class="section-subheading"><?php echo esc_html( ekko_get_option( 'tek-404-subtitle' ) ) ?></p>
	      <?php endif; ?>
				<a href="<?php echo esc_url(get_site_url()); ?>" class="tt_button tt_primary_button"><?php echo ( ekko_get_option( 'tek-404-back' ) ) ? esc_html( ekko_get_option( 'tek-404-back' ) ) : _e( 'Back to homepage', 'ekko' ); ?></a>
	    </div>
    </div>
</section>

<?php get_footer(); ?>
