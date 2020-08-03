<?php /* Template Name: Food Menu */ ?>

<?php get_header(); ?>
</header>

<div id="Content">
  <div class="container">
    <?php get_template_part('components/title', 'page'); ?>

    <div class="food-menu-list">
      <?php
      // Group Single Item template
      $itemTemplate = function ($item) {
        // $link = get_permalink($item->ID);
        $title = get_the_title($item->ID);
        $about = get_the_content(false, false, $item->ID);
        $cost = get_field('cost', $item->ID);
      ?>

        <li class="" style="width: 400px;">
          <div>
            <div class="title">
              <!-- <a href="<?php //echo esc_url($link);
                            ?>"> -->
              <h3 class="text-lg text-eatsGray-500"><?php echo esc_html($title); ?></h3>
              <!-- </a> -->
            </div>
            <div class="spacer">
              <!-- dotted line -->
            </div>
            <div class="cost"><?php echo esc_html($cost); ?></div>
          </div>

          <?php if ($about) : ?>
            <div class="about">
              <?php echo $about; ?>
            </div>
          <?php endif; ?>
        </li>

      <?php
      };

      // Group Template
      $groupTemplate = function ($id, $title, $itemTemplate) {
        $group = get_field($id);
      ?>
        <article id="<?php echo $id; ?>">
          <h2><?php echo $title; ?></h2>

          <ul>
            <?php foreach ($group as $item) : ?>
              <?php $itemTemplate($item); ?>
            <?php endforeach; ?>
          </ul>
        </article>
      <?php
      };

      // Create all groups
      $groupTemplate('menu-sides', 'Sides', $itemTemplate);
      $groupTemplate('menu-burgers', 'Burgers', $itemTemplate);
      $groupTemplate('menu-sandwiches', 'Sandwiches', $itemTemplate);
      $groupTemplate('menu-salad', 'Salad', $itemTemplate);
      $groupTemplate('menu-drinks', 'Drinks', $itemTemplate);
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>