<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php else: ?>
	<?php get_template_part('templates/archive', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endif; ?>



