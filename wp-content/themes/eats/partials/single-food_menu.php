<?php
$featureImgClass;

if (has_post_thumbnail()) {
  $featureImgClass = 'feature-img';
}

$title = get_the_title();
$cost = get_field('cost');
?>

<article id="food_menu-<?php the_ID(); ?>" class="partial-single-menu <?php echo $featureImgClass; ?>">
  <?php if (has_post_thumbnail()) : ?>

    <div class="feature-img">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php endif; ?>

  <div class="content">
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php $title; ?>">
        <?php echo $title; ?>
      </a>
    </h2>

    <div class="base-typo">
      <?php the_content(); ?>
    </div>
  </div>
</article>