<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php if ( get_theme_mod( 'meta_description' ) ) : ?>

    <meta name="description" content="<?php echo ( get_theme_mod( 'meta_description' ) ); ?>" />

  <?php endif; ?>


  <?php if ( get_theme_mod( 'meta_keywords' ) ) : ?>

    <meta name="keywords" content="<?php echo ( get_theme_mod( 'meta_keywords' ) ); ?>" />

  <?php endif; ?>




  <?php wp_head(); ?>
</head>
