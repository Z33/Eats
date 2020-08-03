<?php
global $post;

if (is_home()) :
  $pageTitle = "Welcome to the Eats Blog";

elseif (is_search()) :
  $pageTitle = 'Searching for "' . get_search_query() . '"';

elseif (is_404()) :
  $pageTitle = "Error 404";

else :
  $pageTitle = get_the_title($post->ID);

endif;
?>

<header class="title-page">
  <h1><?php echo $pageTitle; ?></h1>
</header>