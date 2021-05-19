<?php if (has_post_thumbnail()) : ?>
  <div class="entry-image">
    <?php if (is_single()) :
      the_post_thumbnail('large');
    else: ?>
      <a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <?php endif; ?>
  </div>
<?php endif; ?>
