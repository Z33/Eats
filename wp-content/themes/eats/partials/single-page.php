<?php
$featureImgClass;

if (has_post_thumbnail()) {
  $featureImgClass = 'feature-img';
}
?>

<article id="page-<?php the_ID(); ?>" class="partial-single-page <?php echo $featureImgClass; ?>">
  <?php if (has_post_thumbnail()) : ?>

    <div class="feature-img">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php endif; ?>

  <div class="content">
    <div class="base-typo">
      <?php the_content(); ?>
    </div>
  </div>
</article>