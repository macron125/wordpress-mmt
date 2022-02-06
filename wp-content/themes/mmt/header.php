<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#eb1d25">
  <?php // Title and tagline (description) is provided dynamically ?>
  <?php wp_head(); ?>
</head>

<body>
  <?php // Header Basic ?>
  <div class="header-cntnt-basic">
    <div class="header-cntnt-basic-container">
      <?php // Address ?>
      <address class="header-cntnt-basic-address">
        <a class="phone" href="tel:<?php echo get_theme_mod('mmt-contact-info-phone'); ?>"><?php echo get_theme_mod('mmt-contact-info-phone'); ?></a>
        <a class="email" href="mailto:<?php echo get_theme_mod('mmt-contact-info-email'); ?>"><?php echo get_theme_mod('mmt-contact-info-email'); ?></a>
        <span class="address"><?php echo get_theme_mod('mmt-contact-info-address'); ?></span>
      </address>
      <?php // Languages ?>
      <ul class="header-cntnt-basic-lang">
        <?php if( function_exists('pll_the_languages') ) : ?>
          <?php pll_the_languages( $args ); ?>
        <?php else: ?>
        <li><a href="http://localhost:8888/wordpress-mmthospital/">English</a></li>
        <li><a href="http://localhost:8888/wordpress-mmthospital/ru">Русский</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <header id="header">
    <?php // Header Main ?>
    <div class="header-mmt-globalnav-container">
      <nav class="header-mmt-globalnav">

        <div class="mmt-gn-logo-container">
          <a href="<?php echo esc_url( get_home_url() ); ?>">
            <img class="mmt-gn-logo" loading="lazy"
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