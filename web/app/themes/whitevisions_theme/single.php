 <div class="wrapper-basic" role="document" style="display: none;">
     <main class="main" role="main">
<?php get_template_part('templates/content-single', get_post_type()); ?>
     </main><!-- /.main -->



     <?php
       do_action('get_footer');
       get_template_part('templates/footer');
       wp_footer();
     ?>
</div><!-- /.wrapper -->




