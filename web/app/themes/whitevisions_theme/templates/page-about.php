<div class="container">
        <section class="row" id="about">
          <div class="col-md-10 col-md-push-1">
            <div class="blocked">
              <h2>
                <?php the_title(); ?>
              </h2>
              <div class="row">
                <div class="col-sm-10 col-sm-push-2 text-left">
                  <?php the_content(); ?>
                </div>
                <div class="col-sm-2 col-sm-pull-10">
	                <?php
	                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                	the_post_thumbnail();
	                } 
	                ?>
                  <h4>Dévai Ákos</h4>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

