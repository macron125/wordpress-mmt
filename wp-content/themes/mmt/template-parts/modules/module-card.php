<?php if($args) : ?>
<?php // Args are passed to display lateset post from each category ?>
<article class="mmt-news-card" id="aid-<?php the_ID(); ?>">
  <div style="box-sizing:content-box">
    <ul class="mmt-article-data noborder">
      <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
      <li class="mmt-article-data-category ribbon">
        <a href="<?php echo $args['cat_permalink']; ?>"><?php echo $args['cat_name']; ?></a>
      </li>
    </ul>
    <div class="mmt-news-card-content">
      <div class="mmt-news-card-headline"><a href="<?php echo $args['post_permalink']; ?>"><?php echo $args['post_title']; ?></a></div>
      <div class="mmt-news-card-text"><?php echo $args['post_excerpt']; ?></div>
    </div>
  </div>
</article>
<?php else : ?>
<article class="mmt-news-card border-bot" id="aid-<?php the_ID(); ?>">
  <?php if(get_post_custom_values('hero_image')) : ?> 
    <img class="mmt-article-card-img" loading="lazy" src="<?php echo get_post_custom_values('hero_image')[0]; ?>" alt="">
  <?php endif; ?>
  <div>
    <ul class="mmt-article-data noborder">
      <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
      <li class="mmt-article-data-category ribbon"><?php the_category(); ?></li>
    </ul>
    <div class="mmt-news-card-content">
      <div class="mmt-news-card-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
      <div class="mmt-news-card-text"><?php the_excerpt(); ?></div>
    </div>
  </div>
</article>
<?php endif; ?>