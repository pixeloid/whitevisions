
  <h2>
    <?php the_title(); ?>
  </h2>
	<?php the_content(); ?>

	<?php
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	} 
	?>
