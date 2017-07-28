<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Font -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri;?>/assets/fonts/Font-Awesome-master/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri;?>/assets/fonts/open-sans-gh-pages/open-sans.css"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    
    <div id="wrapper" class="site">
    <style type="text/css">
      
    </style>
      <header id="header" class="site-header" role="header">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <div class="navigation-primary">
            <div class="wrap">
              
              <nav class="navbar navbar-toggleable-md navbar-light bg-faded bg-inverse" role="navigation">
                <div class="container">
                  <?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
                  <div class="collapse navbar-collapse" id="navbarToggler">
                    <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                    <?php get_search_form(); ?>
                  </div>
                </div>
              </nav>
              
            </div><!-- .wrap -->
          </div><!-- .navigation-primary -->
        <?php endif; ?>
      </header>

      <div id="content" class="site-content-contain">
        <div class="site-content">