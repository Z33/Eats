<?php
$featureImgClass;

if (has_post_thumbnail()) {
  $featureImgClass = 'feature-img';
}
?>

<article id="blog-<?php the_ID(); ?>" class="partial-single-blog <?php echo $featureImgClass; ?>">
  <header>
    <p class="date"><small><?php the_time('F jS, Y'); ?></small></p>
    <h2>
      <a href="<?php the_permalink(); ?>" title="">
        <?php the_title(); ?>
      </a>
    </h2>
  </header>

  <?php if (has_post_thumbnail()) : ?>

    <div class="feature-img">
      <a class="frame" href="<?php the_permalink('large'); ?>" title="<?php echo $PostLinkMsg; ?>">
        <span class="bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'); ?>)"></span>
        <?php the_post_thumbnail('large'); ?>
      </a>
    </div>

  <?php endif; ?>

  <div class="content">
    <div class="base-typo">
      <?php the_content(); ?>
    </div>
  </div>
</article>