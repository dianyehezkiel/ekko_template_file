<?php
/**
 * Template part for displaying standard posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ekko
 * by KeyDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if ('quote' === get_post_format()) : ?>
	  <h2 class="blog-single-title quote"><?php the_title(); ?></h2>
	<?php else : ?>
	  <h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<?php endif; ?>
	<?php get_template_part( 'core/templates/post/partials/content', 'meta' ); ?>
	<?php get_template_part( 'core/templates/post/post-type/content', get_post_format() ); ?>
	<div class="entry-content">
		<div class="page-content">
			<?php the_excerpt(); ?>
		</div>
		<?php wp_link_pages(); ?>
		<a class="post-link" href="<?php esc_url(the_permalink()); ?>"><?php echo apply_filters( 'blog-readmore-text', esc_html__("Read more", "ekko") ); ?></a>
	</div>
</article>
