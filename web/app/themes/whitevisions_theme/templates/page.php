<div class="container">
		<header>
		  <h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} 
		?>
		<?php the_content(); ?>
</div>	

