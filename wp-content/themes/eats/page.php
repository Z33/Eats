<?php get_header(); ?>
</header>

<div id="Content">
  <div class="container">
    <?php get_template_part('components/title', 'page'); ?>

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('partials/single', 'page');
      endwhile;

    else :
      echo '<p>' . esc_html_e('Sorry, no posts matched your criteria.') . '</p>';

    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>