<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <?php wp_head() ?>

</head>

<header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><span>
        <a href="#header" class="scrollto">
          <?php
            if(function_exists('the_custom_logo')){

                  $customlogo = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src($customlogo);
            }
          ?>
        <img src="<?php echo $logo[0] ?>" alt="" class="img-fluid"></a>
        </span><a href="#intro" class="scrollto"><span><?php echo get_bloginfo('name') ?></span></a></h1>

      </div>
      <?php if ( has_nav_menu( 'dekstop' ) ) : ?>
      <nav class="main-nav float-right d-none d-lg-block">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'dekstop',
            'menu' => 'dekstop',
            'container' =>  '',
          )

        )
        ?>
         
      </nav><!-- .main-nav -->
      <?php endif; ?>
      
    </div>
  </header>
