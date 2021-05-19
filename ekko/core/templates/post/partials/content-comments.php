<?php
/**
 * The template used for displaying comments for single Blog posts
 */
 ?>

<section class="page-content comments-content">
	<div class="container">
	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) {
			comments_template();
		}
	?>
	</div>
</section>