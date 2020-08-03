<?php $arrow = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/cheveron-right.svg'); ?>

<a class="link-read-more" href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo "Read, " . get_the_title(); ?>">
  <span>Read More</span>
  <span><?php echo $arrow; ?></span>
</a>