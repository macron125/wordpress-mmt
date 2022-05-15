<article class="mmt-news-card border-bot" id="aid-<?php the_ID(); ?>">
  <?php if(get_the_post_thumbnail_url() != '') : ?> 
    <img class="mmt-article-card-img" loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  <?php endif; ?>
  <div style="box-sizing:content-box">
    <ul class="mmt-article-data noborder">
      <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
    </ul>
    <div class="mmt-news-card-content">
      <div class="mmt-news-card-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
      <div class="mmt-news-card-text"><?php the_excerpt(); ?></div>
    </div>
  </div>
</article>