<?php get_header(); ?>
</header>

<div id="Content">
  <div class="container">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        $post_type = get_post_type();

        if ($post_type == 'post') :
          get_template_part('partials/single', 'blog');

        elseif ($post_type == 'food_menu') :
          get_template_part('partials/single', 'food_menu');

        endif;
      endwhile;
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>