<?php 

if( is_home() ) {
  $news_page_id = get_option( 'page_for_posts' );
}

$title_simple;

if(single_term_title('', false)) {
  $title_simple = single_term_title('', false);
} else {
  $title_simple = single_post_title('', false);
}

// if( get_theme_mod('mmt_banner_callout_setting') ) {
//   $title = get_theme_mod('mmt_banner_callout_headline'); 
// } elseif ( single_term_title('', false) != "" ) {
//   $title = single_term_title('', false);
// } else {
//   $title = single_post_title('', false);
// }

// $vid_headline = get_theme_mod('mmt-banner-callout-headline');
// $vid_subheadline = get_theme_mod('mmt-banner-callout-subheadline');
// $vid_cta = get_theme_mod('mmt-banner-callout-cta');
// $vid_cta_url = get_theme_mod('mmt-banner-callout-cta-url');
// $vid_poster = wp_get_attachment_url(get_theme_mod('mmt-banner-callout-poster'));
// $vid_vid = wp_get_attachment_url(get_theme_mod('mmt-banner-callout-vid'));

?>

<?php if( get_post_custom_values('hero_image') ) : ?>
<section class="module module-hero mmt-hero-banner">
  <div class="mmt-hero-banner-img-container">
    <div class="mmt-hero-banner-overlay"></div>
    <img class="mmt-hero-banner-img" src="
      <?php 
      echo esc_url( get_post_custom_values( 'hero_image', is_home() ? $news_page_id : '' )[0] ); ?>" alt="">
  </div>
  <div class="mmt-hero-headline-container">
    <h1 class="mmt-hero-banner-headline"><?php  echo $title_simple; ?></h1>
  </div>
</section>
<?php elseif(get_post_custom_values('hero_video')) : ?>

  <?php
  $vid_headline = get_post_custom_values ( 'hero_video_headline' )[0];
  $vid_subheadline = get_post_custom_values ( 'hero_video_subheadline' )[0];
  $vid_cta = get_post_custom_values ( 'hero_video_cta' )[0];
  $vid_cta_url = get_page_by_title( 'Book a Visit' );
  $vid_poster = esc_url( get_post_custom_values( 'hero_video_poster', is_home() ? $news_page_id : '' )[0] );
  $vid_vid = esc_url( get_post_custom_values( 'hero_video', is_home() ? $news_page_id : '' )[0] );
  ?>

<section class="module module-hero module-vid">
  <video autoplay loop muted preload="auto" 
    poster="<?php echo $vid_poster ?>">
    <source src="<?php echo $vid_vid; ?>" type="video/mp4">
    Sorry, your browser doesn't support embedded videos.
  </video>
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
<?php if( is_page( [ 'who-we-are', 'what-we-do', 'privacy-policy' ] ) ) :?>
<nav class="mmt-page-nav">
  <ul class="mmt-page-nav-list">
    <?php // Menu goes here main.js ?>
  </ul>
</nav>
<?php endif; ?>