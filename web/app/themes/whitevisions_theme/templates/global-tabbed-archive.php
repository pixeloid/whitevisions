<div class='col-md-10 col-md-push-1'>
  <div class='blocked tabbed'>
    <div data-sticky_parent>
      <div class='row'>
        

        <div class='col-md-3 sticky-outer'>
          <aside data-sticky_column>
            <h2>
            <?php the_title(); ?>
            </h2>
            <ul class="nav nav-list hidden-xs" role="tablist">
              <?php $first = true; while (have_posts()) : the_post();  ?>
              <li <?php if($first): ?>class="active" <?php endif; ?>role="presentation">
                <a aria-controls="<?php echo $post->post_name; ?>" data-toggle="tab" href="#<?php echo $post->post_name; ?>" role="tab" aria-expanded="false"><?php the_title(); ?></a>
              </li>
              <?php if($first) $first = false; ?>
              <?php endwhile; ?>
            </ul>
            <img src="" alt="">
          </aside>

        </div>
        <div class="col-md-8 col-md-push-1 tab-content">
          <?php $first = true;  while (have_posts()) : the_post(); ?>

          <div class="text-left tab-pane <?php if($first): ?> active in<?php endif; ?>" id="<?php echo $post->post_name; ?>">
                      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
            </div>
            <?php if($first) $first = false; ?>

          <?php endwhile; ?>
        </div>


      </div>
    </div>
  </div>
</div>