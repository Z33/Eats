<?php
if (is_search()) :
  $type;
  $typeRaw = get_post_type();

  if ($typeRaw === "page") :
    $type = "Page";
  elseif ($typeRaw === "post") :
    $type = "Blog Post";
  elseif ($typeRaw === "food_menu") :
    $type = "Menu Item";
  endif;
?>

  <span class="tag-type"><?php echo $type; ?></span>

<?php endif; ?>