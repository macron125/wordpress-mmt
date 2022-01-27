<section class="module module-blog">
  <article class="mmt-article">
    <ul class="mmt-article-data">
      <li class="mmt-article-data-category"><?php the_category(); ?></li>
      <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
    </ul>

    <div class="mmt-article-content">
      <?php the_content(); ?>
    </div>
  </article>
</section>