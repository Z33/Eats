<?php
$NavSearchOpen = false;
$NavSearchMsg;
$NavSearchIcon;
$NavSearchVal;

if ($NavSearchOpen) :
  $NavSearchMsg = "Hide Search";
  $NavSearchIcon = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/close.svg');
else :
  $NavSearchMsg = "Show Search";
  $NavSearchIcon = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/search.svg');
endif;
?>

<form id="searchform" action="/" method="get">
  <label class="sr-only" for="search">Search</label>

  <input type="text" name="s" id="search" class="tabindex-navSearch" value="<?php the_search_query(); ?>" placeholder="e.g. delicious sandwiches" tabindex="-1" />

  <button class="tabindex-navSearch" tabindex="-1">
    <span class="sr-only"><?php $NavSearchMsg; ?></span>
    <?php echo $NavSearchIcon; ?>
  </button>
</form>