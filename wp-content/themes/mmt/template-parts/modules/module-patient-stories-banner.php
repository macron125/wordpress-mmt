<?php if( get_the_post_thumbnail_url() != '' || get_theme_mod('mmt-patient-stories-banner') != '' ) : ?>
<section class="module module-hero mmt-hero-banner">
  <?php if ( is_post_type_archive( 'patient_stories' ) ) : ?>
  <div class="mmt-hero-banner-img-container">
    <div class="mmt-hero-banner-overlay"></div>
    <img class="mmt-hero-banner-img" loading="lazy" src="<?php echo esc_url(get_theme_mod('mmt-patient-stories-banner')); ?>" alt="">
  </div>
  <div class="mmt-hero-headline-container">
    <h1 class="mmt-hero-banner-headline"><?php echo $args['headline'] ?></h1>
  </div>
  <?php else : ?>
    <div class="mmt-hero-banner-img-container">
      <div class="mmt-hero-banner-overlay"></div>
      <img class="mmt-hero-banner-img" loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
    </div>
    <div class="mmt-hero-headline-container">
      <h1 class="mmt-hero-banner-headline"><?php echo get_the_title() ?></h1>
    </div>
  <?php endif; ?>
</section>

<?php else : ?>
<section class="module module-hero mmt-hero-banner">
  <div class="mmt-hero-headline-container nobanner">
    <?php if ( is_post_type_archive( 'patient_stories' ) ) : ?>
      <h1 class="mmt-hero-banner-headline"><?php echo $args['headline'] ?></h1>
    <?php else : ?>
      <h1 class="mmt-hero-banner-headline"><?php echo get_the_title() ?></h1>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>