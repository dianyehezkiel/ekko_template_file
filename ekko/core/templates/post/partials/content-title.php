<?php
/**
 * The template used for displaying titles for single Blog posts
 */
 ?>

<?php if ('quote' === get_post_format()) : ?>
  <h1 class="blog-single-title quote"><?php the_title(); ?></h1>
<?php else : ?>
  <h1 class="blog-single-title"><?php the_title(); ?></h1>
<?php endif; ?>
