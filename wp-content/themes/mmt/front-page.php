<?php get_header(); ?> 
    
<?php if(is_front_page()) : ?>

    <main>
      <section class="module module-hero module-vid">
        <video autoplay loop muted poster="http://localhost:8888/wordpress-mmthospital/wp-content/uploads/2022/01/mmt-video-poster.jpeg">
          <source src="<?php echo esc_url( get_post_custom_values('hero_video')[0] ); ?>" type="video/mp4">
          Sorry, your browser doesn't support embedded videos.
        </video>
      </section>
    </main>

<?php endif; ?>

<?php get_footer() ?>