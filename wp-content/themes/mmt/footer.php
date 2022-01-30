<div href="#" class="mmt-btt-container">
  <span class="dashicons dashicons-arrow-up-alt"></span>
</div>
<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'book a visit' ) ) ); ?>" class="mmt-bav-container">
  <span class="dashicons dashicons-email-alt"></span>
</a>
<footer class="mmt-footer" id="footer">
  <div class="mmt-footer-wrapper">
    <nav class="mmt-footer-sitemap">
      <p class="mmt-footer-sitemap-title">Sitemap</p>
      <?php
          
          wp_nav_menu(
            [
              // 'container_class'       => '',
              'menu_class'            => 'mmt-footer-sitemap-list-item',
              'theme_location'        => 'footermenu',
              'depth'                 => '1',
              'li_class'              => 'mmt-footer-sitemap-list-item',
            ]
          );

          ?>
    </nav>
    <div class="mmt-footer-contact-container">
      <img class="mmt-footer-logo"
        src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="MMT Hospital Logo">
      <address class="mmt-footer-contact">
        <a class="mmt-phone" href="tel:<?php echo get_theme_mod('mmt-contact-info-phone'); ?>"><?php echo get_theme_mod('mmt-contact-info-phone'); ?></a>
        <a class="mmt-email" href="mailto:<?php echo get_theme_mod('mmt-contact-info-email'); ?>"><?php echo get_theme_mod('mmt-contact-info-email'); ?></a>
        <span class="mmt-address"><?php echo get_theme_mod('mmt-contact-info-address'); ?></span>
      </address>
    </div>
  </div>
</footer>
<div class="developedBy" id="developedBy" style="width:100%;text-align:center;font-family:'montserrat';font-size:10px;background-color:#0E0E10;color:#fff;padding:10px 0;">Designed and developed by <a href="https://georgeparesishvili.com/" style="color:#fff"><b>George&nbsp;Paresishvili</b></a></div>
<?php wp_footer(); ?>
</body>
</html>