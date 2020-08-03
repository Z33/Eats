<?php
$featureImgClass;
$PostLinkMsg = "Read, " . get_the_title();

if (has_post_thumbnail()) {
  $featureImgClass = 'feature-img';
}
?>

<article id="blog-<?php the_ID(); ?>" class="partial-list-blog <?php echo $featureImgClass; ?>">
  <?php if (has_post_thumbnail()) : ?>

    <div class="feature-img">
      <a class="frame" href="<?php the_permalink(); ?>" title="<?php echo $PostLinkMsg; ?>">
        <span class="bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>)"></span>
        <?php the_post_thumbnail('large'); ?>
      </a>
    </div>

  <?php endif; ?>

  <div class="content">
    <?php get_template_part('components/tag', 'type'); ?>

    <p class="date"><small><?php the_time('F jS, Y'); ?></small></p>

    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php echo $PostLinkMsg; ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <div class="base-typo">
      <?php the_content(false); ?>

      <div class="mt-4">
        <?php get_template_part('components/link', 'read-more'); ?>
      </div>
    </div>
  </div>
</article>