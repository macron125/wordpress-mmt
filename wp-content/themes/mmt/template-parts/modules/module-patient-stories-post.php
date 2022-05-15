<section class="module module-blog">
  <article class="mmt-article" id="aid-<?php the_ID(); ?>">
    <?php // Check if its a single post. If its page, omit the data ribbon. ?>
    <?php if( is_single() ) : ?>
    <ul class="mmt-article-data">
      <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
    </ul>
    <?php endif; ?>

    <div class="mmt-article-content">
      <?php the_content(); ?>
    </div>
  </article>
</section>