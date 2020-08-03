<?php
$featureImgClass;

if (has_post_thumbnail()) {
  $featureImgClass = 'feature-img';
}
?>

<article id="food_menu-<?php the_ID(); ?>" class="partial-list-menu <?php echo $featureImgClass; ?>">
  <?php if (has_post_thumbnail()) : ?>

    <div class="feature-img">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php endif; ?>

  <div class="content">
    <?php get_template_part('components/tag', 'type'); ?>

    <h2>
      <a href="<?php the_permalink(); ?>" title="">
        <?php the_title(); ?>
      </a>
    </h2>

    <div class="base-typo">
      <?php the_content(); ?>

      <?php get_template_part('components/link', 'read-more'); ?>
    </div>
  </div>
</article>