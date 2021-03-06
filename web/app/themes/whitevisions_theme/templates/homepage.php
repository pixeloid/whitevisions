<?php
    /*
        Template Name: Wrapper
    */


?>

<?php
    $args = array("post_type" => "page", "order" => "ASC", "orderby" => "menu_order");
    $the_query = new WP_Query($args);
?>


 <div class="wrapper" role="document" style="display: none;">
     <main class="main" role="main">
     <?php if(have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>
     <?php if ($post->post_name == 'base') continue; ?>


     <?php echo types_render_field('gallery-separator') ?>
     <?php  get_template_part("templates/page", $post->post_name); ?>

     <?php endwhile; endif; ?>
     </main><!-- /.main -->



     <?php
       do_action('get_footer');
       get_template_part('templates/footer');
       wp_footer();
     ?>
</div><!-- /.wrapper -->



