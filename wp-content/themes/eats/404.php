<?php get_header(); ?>
</header>

<div id="Content">
  <div class="container">
    <?php get_template_part('components/title', 'page'); ?>

    <div class="w-full p-4 bg-eatsBlue-100" style="max-width: 500px;">
      <img class="mt-8 mx-auto w-64" src="https://media.giphy.com/media/emHOF9rEMOV8JOmX3c/giphy.gif" />

      <div class="w-full mx-auto text-center" style="max-width: 375px;">
        <h2 class="mt-4">Let's fry this one more time!</h2>
        <p>What page were you looking for? Try "menu", "about us", or any related keywords.</p>
      </div>

      <div class="mt-8">
        <?php get_template_part('components/searchform'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>