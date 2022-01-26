<?php get_header(); ?>

<?php if(is_front_page()) : ?>

<main>
  <section class="module module-hero module-vid">
    <video autoplay loop muted preload="auto"
      poster="http://localhost:8888/wordpress-mmthospital/wp-content/uploads/2022/01/mmt-video-poster.jpeg">
      <source src="<?php echo esc_url( get_post_custom_values('hero_video')[0] ); ?>" type="video/mp4">
      Sorry, your browser doesn't support embedded videos.
    </video>
  </section>


</main>

<?php endif; ?>

<?php 

if( have_posts () ) {
  while ( have_posts() ) {
    the_post();

    the_title( sprintf( '<h2 class="events-article-headline"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );

    the_content();

    // get_template_part( 'template-parts/content/content-single' );
  }
} else {
  get_template_part( 'template-parts/content/content', 'none' );
}

?>

<?php get_footer() ?>