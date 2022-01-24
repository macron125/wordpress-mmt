<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php // Title and tagline (description) is provided dynamically ?>
  <?php wp_head(); ?>
</head>

<body>
  <?php // Header Basic ?>
  <div class="header-cntnt-basic">
    <div class="header-cntnt-basic-container">
      <?php // Address ?>
      <address class="header-cntnt-basic-address">
        <a class="phone" href="tel:+995599999999">+995 599 99 99 99</a>
        <a class="email" href="mailto:mmt@mmthospital.com">mmt@mmthospital.com</a>
        <span class="address">5 Lubliana Str, Tbilisi, Georgia</span>
      </address>
      <?php // Languages ?>
      <div class="header-cntnt-basic-lang">
        <a href="#">English</a>
        <a href="#">Russian</a>
      </div>
    </div>
  </div>
  <header id="header">
    <?php // Header Main ?>
    <div class="header-mmt-globalnav-container">
      <nav class="header-mmt-globalnav">

        <div class="mmt-gn-logo-container">
          <a href="<?php echo esc_url( get_home_url() ); ?>">
            <img class="mmt-gn-logo"
              src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>"
              alt="MMT Hospital Logo" />
          </a>
        </div>

        <?php 
          
          wp_nav_menu(
            [
              'menu_class'            => 'mmt-gn-list',
              'theme_location'        => 'mainmenu',
              'depth'                 => '1',
              'li_class'              => 'mmt-gn-list-item',
            ]
          );
          
          ?>

        <div class="mmt-ham">
          <div class="mmt-ham_btn"></div>
        </div>
      </nav>
    </div>
  </header>