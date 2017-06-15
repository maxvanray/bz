<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Royal Preloader CSS -->
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/royal_preloader.css'?>" rel="stylesheet">

    <!-- jQuery Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- jQuery Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.10.2/validator.min.js"></script>

    <!-- Royal Preloader -->
    <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/royal_preloader.min.js'?>"></script>
    <script type="text/javascript">
      Royal_Preloader.config({
          mode:           'number',
          showProgress:   false,
          background:     '#fff'
      });
    </script>

    <!-- Stylesheets -->
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/ionicons.min.css' ?>" rel="stylesheet">
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/pe-icon-7-stroke.css' ?>" rel="stylesheet">
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/magnific-popup.css' ?>" rel="stylesheet">
    <link href="<?php echo trailingslashit( get_template_directory_uri() ) .'css/style.css' ?>" rel="stylesheet" title="main-css">



    <?php //wp_head(); ?>


  </head>

<body class="body-static-navbar royal_preloader exhibitions">



  <!-- Begin Header -->
  <header>

  <!-- Begin Navigation -->
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand scroll-top" href="<?php echo site_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/signature.png" class="logo img-responsive" alt="Barbara Zanelli">
        </a>
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



