<a href="#" class="mmt-btt-container">
  <span class="dashicons dashicons-arrow-up-alt"></span>
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
        <a class="mmt-phone" href="tel:+995599999999">+995 599 99 99 99</a>
        <a class="mmt-email" href="mailto:mmt@mmthospital.com">mmt@mmthospital.com</a>
        <span class="mmt-address">5 Lubliana Str, Tbilisi, Georgia</span>
      </address>
    </div>
  </div>
</footer>
<div class="developedBy" id="developedBy"
  style=" display: flex;align-items: center; justify-content: center ;font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 9px; height: 44px; background-color: #1A1A1A; color: white; letter-spacing: 0.1em; white-space: pre-wrap">
  2022 Designed and Developed by <a style="font-weight: 700; color: white; letter-spacing: 0.1em;"
    href="https://georgeparesishvili.com" target="_blank">George&nbsp;Paresishvili</a></div>
<?php wp_footer(); ?>
</body>

</html>