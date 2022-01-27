<?php if($args) : ?>
<article class="mmt-news-card" id="aid-<?php the_ID(); ?>">
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
</article>
<?php else : ?>
<article class="mmt-news-card border-bot" id="aid-<?php the_ID(); ?>">
  <ul class="mmt-article-data noborder">
    <li class="mmt-article-data-date"><?php echo get_the_date(); ?></li>
    <li class="mmt-article-data-category ribbon"><?php the_category(); ?></li>
  </ul>
  <div class="mmt-news-card-content">
    <div class="mmt-news-card-headline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="mmt-news-card-text"><?php the_excerpt(); ?></div>
  </div>
</article>

<?php endif; ?>