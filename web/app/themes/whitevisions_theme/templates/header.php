<div id='fb-root'>
  <script>
    (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.3&appId=150380485030436";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
  </script>
</div>

<nav class='navbar navbar-default navbar-fixed-top' id='top-nav'>
  <div class='container'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button class='navbar-toggle collapsed' data-target='#top-nav-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='#'>
        <img alt='<?php bloginfo('name'); ?>' title='<?php bloginfo('name'); ?>' src='<?php echo get_template_directory_uri(); ?>/dist/images/white_visions_logo.svg'>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='top-nav-collapse'>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => new Roots\Sage\Nav\Walker]);
      endif;
      ?>
    </div>
  </div>
</nav>
