<?php get_template_part('templates/header',get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>



<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

