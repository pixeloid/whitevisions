<?php
    $args = array("post_type" => "gallery", "order" => "ASC", "orderby" => "menu_order");
    query_posts($args);
    $num = $wp_query->post_count;
?>

<div class='container'>
  <section id='gallery-links'>
    <h1>
	    <?php the_title(); ?> 
    </h1>
    <div class='row'>
    
    <?php if($num == 2 || $num == 4): ?>

        <?php $first = true; while (have_posts()) : the_post();  ?>
        <div class='col-sm-6'>
          <div class='gallery-inner'>
            <a href=' <?php the_permalink(); ?>'>
              <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('large', array( 'class' => 'img-responsive' ));
          } 
          ?>
              <div class='text'>
                <h2><?php the_title(); ?></h2>
                <p><?php  echo types_render_field('gallery-desc') ?></p>
              </div>
            </a>
          </div>
        </div>
        <?php if($first) $first = false; ?>
        <?php endwhile; ?>
    
    <?php elseif($num == 3): ?>

        <?php $first = true; while (have_posts()) : the_post();  ?>
          
          <?php if($first): ?>

            <div class='col-sm-8'>
              <div class='gallery-inner'>
                <a href=' <?php the_permalink(); ?>'>
                  <?php
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large', array( 'class' => 'img-responsive' ));
                  } 
                  ?>
                  <div class='text'>
                    <h2><?php the_title(); ?></h2>
                    <p><?php  echo types_render_field('gallery-desc') ?></p>
                  </div>
                </a>
              </div>
            </div>
            <div class='col-sm-4'>
              <div class='row'>

          <?php else: ?>

            <div class='col-sm-12'>
              <div class='gallery-inner'>
                <a href=' <?php the_permalink(); ?>'>
                  <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('large', array( 'class' => 'img-responsive' ));
              } 
              ?>
                  <div class='text'>
                    <h2><?php the_title(); ?></h2>
                    <p><?php  echo types_render_field('gallery-desc') ?></p>
                  </div>
                </a>
              </div>
            </div>


          <?php endif; ?>
       





        <?php if($first) $first = false; ?>
        <?php endwhile; ?>
    
      </div></div>


    <?php elseif($num == 5): ?>

        <?php $first = true; while (have_posts()) : the_post();  ?>
          
          <?php if($first): ?>

            <div class='col-sm-6'>
              <div class='gallery-inner'>
                <a href=' <?php the_permalink(); ?>'>
                  <?php
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('large', array( 'class' => 'img-responsive' ));
                  } 
                  ?>
                  <div class='text'>
                    <h2><?php the_title(); ?></h2>
                    <p><?php  echo types_render_field('gallery-desc') ?></p>
                  </div>
                </a>
              </div>
            </div>
            <div class='col-sm-6'>
              <div class='row'>

          <?php else: ?>

            <div class='col-sm-6'>
              <div class='gallery-inner'>
                <a href=' <?php the_permalink(); ?>'>
                  <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('large', array( 'class' => 'img-responsive' ));
              } 
              ?>
                  <div class='text'>
                    <h2><?php the_title(); ?></h2>
                    <p><?php  echo types_render_field('gallery-desc') ?></p>
                  </div>
                </a>
              </div>
            </div>


          <?php endif; ?>
       





        <?php if($first) $first = false; ?>
        <?php endwhile; ?>
    
      </div></div>

    <?php endif; ?>


    </div>
  </section>
</div>


