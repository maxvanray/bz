<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11">



    <?php wp_head(); ?>
    <script type="text/javascript">
      Royal_Preloader.config({
          mode:           'number',
          showProgress:   false,
          background:     '#fff'
      });
    </script>

  </head>

<body <?php body_class('body-spacing-top royal_preloader'); ?>>

  <!-- Preloader -->
  <div id="royal_preloader"></div>

  <!-- Begin Header -->
  <header>

  <!-- Begin Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-spacing-top-fixed">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand scroll-top" href="/">B Zanelli</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
      			<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <?php
          wp_nav_menu( array(
          'theme_location' => 'page-navigation-menu',
          'container_class' => 'nav navbar-nav navbar-right',
          'menu_id' => 'navbar',
          'menu_class' => 'nav navbar-nav' ) ); ?>
      </div>

    </div>
  </nav>

  </header>
  <!-- End Header -->

