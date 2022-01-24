<section class="module module-hero mmt-hero-banner">
    <div class="mmt-hero-banner-img-container">
      <div class="mmt-hero-banner-overlay"></div>
      <img class="mmt-hero-banner-img" src="<?php echo esc_url( get_post_custom_values('hero_image')[0] ); ?>" alt="">  
    </div>
    <div class="mmt-hero-headline-container">
      <h1 class="mmt-hero-banner-headline"><?php the_title(); ?></h1>
    </div>
  </section>
  <nav class="mmt-page-nav">
    <ul class="mmt-page-nav-list">
      <?php // Menu goes here main.js ?>
    </ul>
  </nav>