	<?php
	    $args = array("post_type" => "info-eskuvo", "order" => "ASC", "orderby" => "menu_order");
	    query_posts($args);
	?>
<div class="container">
        <section class="row" id="info-eskuvo">
        <?php get_template_part('templates/global', 'tabbed-archive'); ?>
        </section>
      </div>


