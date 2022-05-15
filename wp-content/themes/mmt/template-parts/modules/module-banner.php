<?php 

$news_page_id = get_option( 'page_for_posts' );

if(single_term_title('', false)) {
  $title_simple = single_term_title('', false);
} else {
  $title_simple = single_post_title('', false);
}
?>

<?php if( is_home() || get_post_custom_values('hero_image') ) : ?>
<section class="module module-hero mmt-hero-banner">
  <div class="mmt-hero-banner-img-container">
    <div class="mmt-hero-banner-overlay"></div>
    <img class="mmt-hero-banner-img" loading="lazy" src="
      <?php echo esc_url( get_post_custom_values( 'hero_image', is_home() ? $news_page_id : '' )[0] ); ?>" alt="">
  </div>
  <div class="mmt-hero-headline-container">
    <h1 class="mmt-hero-banner-headline"><?php echo $title_simple; ?></h1>
  </div>
</section>
<?php elseif(get_post_custom_values('hero_video')) : ?>

  <?php
  $vid_headline       = get_post_custom_values ( 'hero_video_headline' )[0];
  $vid_subheadline    = get_post_custom_values ( 'hero_video_subheadline' )[0];
  $vid_cta            = get_post_custom_values ( 'hero_video_cta' )[0];
  $vid_cta_url        = get_page_by_title( 'Book a Visit' );
  $vid_poster         = esc_url( get_post_custom_values( 'hero_video_poster', is_home() ? $news_page_id : '' )[0] );
  $vid_vid            = esc_url( get_post_custom_values( 'hero_video', is_home() ? $news_page_id : '' )[0] );
  ?>

<section class="module module-hero module-vid">
  <video autoplay loop muted preload="auto" 
    poster="<?php echo $vid_poster ?>">
    <source src="<?php echo $vid_vid; ?>" type="video/mp4">
    Sorry, your browser doesn't support embedded videos.
  </video>
  <img class="mmt-hero-banner-poster" src="<?php echo $vid_poster ?>" alt="" hidden>
  <div class="mmt-hero-banner-overlay"></div>
  <div class="mmt-hero-headline-container module-long">
    <h1 class="mmt-hero-banner-headline"><?php echo $vid_headline; ?></h1>
    <h2><?php echo $vid_subheadline;  ?></h2>
    <?php if( get_post_custom_values ( 'hero_video_cta' ) ) : ?>
    <div class="mmt-hero-headline-button-container">
      <a class="mmt-hero-headline-button" href="<?php echo esc_url( get_permalink( $vid_cta_url ) ); ?>"><?php echo $vid_cta; ?></a>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php else : ?>
<section class="module module-hero mmt-hero-banner">
  <div class="mmt-hero-headline-container nobanner">
    <h1 class="mmt-hero-banner-headline"><?php echo $title_simple; ?></h1>
  </div>
</section>
<?php endif; ?>

<?php 

$who_we_are_page = get_page_by_path('who-we-are');
$what_we_do_page = get_page_by_path('our-services');

$who_we_are_id_EN = $who_we_are_page->ID;
$what_we_do_id_EN = $what_we_do_page->ID;


if(function_exists('PLL')) :
  $who_we_are_id_RU = pll_get_post_translations( $who_we_are_id_EN )['ru'];
  $what_we_do_id_RU = pll_get_post_translations( $what_we_do_id_EN )['ru'];

  if( 
    is_page($who_we_are_id_EN) || is_page($who_we_are_id_RU) ||    
    is_page($what_we_do_id_EN) || is_page($what_we_do_id_RU)    
  ) : ?>
  <nav class="mmt-page-nav">
    <ul class="mmt-page-nav-list">
      <?php // Menu goes here main.js ?>
    </ul>
  </nav>
  <?php endif; ?>
<?php endif; ?>