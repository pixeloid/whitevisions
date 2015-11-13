<?php 
if (have_posts()): while (have_posts()): the_post(); ?>
<section id="gallery">
	<div class="container">
		<h1>
		  <?php the_title(); ?>
		</h1>
	</div>
	<?php the_content() ?>
	<a class='gallery-close' href='/#gallery-links'>
	  Vissza
	</a>

</section>


<?php endwhile; endif;?>



