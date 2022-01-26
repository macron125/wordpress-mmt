  <?php if( get_post_custom_values('hero_image') ) : ?>
    <section class="module module-hero mmt-hero-banner">
      <div class="mmt-hero-banner-img-container">
        <div class="mmt-hero-banner-overlay"></div>
        <img class="mmt-hero-banner-img" src="<?php echo esc_url( get_post_custom_values('hero_image')[0] ); ?>" alt="">
      </div>
      <div class="mmt-hero-headline-container">
        <h1 class="mmt-hero-banner-headline"><?php the_title(); ?></h1>
      </div>
    </section>
  <?php elseif(get_post_custom_values('hero_video')) : ?>
    <section class="module module-hero module-vid">
      <video autoplay loop muted preload="auto" poster="http://localhost:8888/wordpress-mmthospital/wp-content/uploads/2022/01/mmt-video-poster.jpeg">
        <source src="<?php echo esc_url( get_post_custom_values('hero_video')[0] ); ?>" type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
      </video>
    </section>
  <?php else : ?>
    <section class="module module-hero mmt-hero-banner">
      <div class="mmt-hero-headline-container nobanner">
        <h1 class="mmt-hero-banner-headline"><?php the_title(); ?></h1>
      </div>
    </section>
  <?php endif; ?>
<?php if( !is_page( [ 'book-a-visit', 'privacy-policy', ] ) && !is_front_page() && !is_single() ) :?>
  <nav class="mmt-page-nav">
    <ul class="mmt-page-nav-list">
      <?php // Menu goes here main.js ?>
    </ul>
  </nav>
<?php endif; ?>