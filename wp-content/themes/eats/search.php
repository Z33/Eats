<?php get_header(); ?>
</header>

<div id="Content">
  <div class="container">
    <?php get_template_part('components/title', 'page'); ?>

    <?php
    if (have_posts()) : ?>
      <div class="article-list">

        <?php
        while (have_posts()) : the_post();
          $post_type = get_post_type();

          if ($post_type == 'page') :
            get_template_part('partials/list', 'page');

          elseif ($post_type == 'post') :
            get_template_part('partials/list', 'blog');

          elseif ($post_type == 'food_menu') :
            get_template_part('partials/list', 'food_menu');

          endif;
        endwhile;
        ?>
      </div>

    <?php else : ?>
      <p class="inline-block p-4 bg-yellow-300">Sorry, no posts matched your criteria.</p>

    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>