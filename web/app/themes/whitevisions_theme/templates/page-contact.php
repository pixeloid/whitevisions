<section id="contact">
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-push-1">
                <div class="blocked">
                  <h3>
                    <?php bloginfo( 'name' ); ?>
                    <br>
                    <?php bloginfo( 'description' ); ?>
                  </h3>
                  <ul>
                    <li>
                      <a href="<?php echo types_render_field('web') ?>">
                        <i class="fa fa-globe"></i>
                        <?php echo str_replace('http://', '', types_render_field('web')); ?>
                      </a>
                    </li>
                    <li>
                    <a href="mailto:<?php echo types_render_field('e-mail', array('output' => 'raw')) ?>">
                      <i class="fa fa-envelope"></i>
                      <?php echo types_render_field('e-mail', array('output' => 'raw')) ?>
                      </a>
                    </li>
                    <li>
                      <i class="fa fa-mobile"></i>
                      <?php echo types_render_field('telefon') ?>
                    </li>
                    <li>
                      <a href="<?php echo types_render_field('facebook') ?>">
                        <i class="fa fa-facebook"></i>
                                                <?php echo str_replace('https://', '', types_render_field('facebook')); ?>

                      </a>
                    </li>
                  </ul>
                  <div class='fb-like' data-action='like' data-href='http://www.facebook.com/whitevisionsphotography' data-layout='button_count' data-share='false' data-show-faces='true'></div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </section>