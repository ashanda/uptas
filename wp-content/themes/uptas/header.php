<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uptas
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Uptas</title>

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <!-- fontAwsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Main wrapper start -->
  <!-- header start -->
  <header class="main" id="header">
    <div class="container-fluid">
      <!-- start navigation bar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php if (get_field('header_logo', 'option')) : ?>
              <img src="<?php the_field('header_logo', 'option'); ?>" alt="uptas" />
            <?php endif; ?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
            <?php
            wp_nav_menu(array(
              'theme_location' => 'menu-1',
              'depth' => 2,
              'container' => 'false',
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarNav',

              'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',

              'add_a_class' => 'nav-link',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>

            <form class="form-inline my-2 my-lg-0">
              <div class="contact-details">
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/phone icon.svg" alt="Phone" />
                <div class="contact-no">
                  <p><?php the_field('conatct_number_01', 'option'); ?></p>
                  <p><?php the_field('conatct_number_02', 'option'); ?></p>
                </div>
              </div>

              <div class="nav-button">
                <a class="btn btn-outline-success get_qoute" href="<?php the_field('header_button_link', 'option'); ?>" role="button">
                  <?php the_field('header_button_text', 'option'); ?>
                </a>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- navigation bar end -->
    </div>
  </header>
  <!-- header end -->