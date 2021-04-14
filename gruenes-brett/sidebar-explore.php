<?php
/**
 * Navigation bar for the explore page
 *
 * @package GruenesBrett
 */

?>
<aside>
  <nav>
    <div class="item">
      <a href="?">Alle</a>
    </div>

    <?php
    $all_categories = Category_Provider::get_all();
    foreach ( $all_categories as $category ) {
        list(
          $background,
          $foreground
          )   = $category->get_background_foreground_colors();
        $name = $category->get_field( 'name' );

        $bg_style = "background-color: $background;";
        $fg_style = "color: $foreground;";
        $href     = '?category=' . rawurlencode( $name );

        // TODO @sebastianlay/@joergrs: Implement behavior of category buttons.
        echo <<<XML
        <div class="item" style="$bg_style">
          <a href="$href" style="$fg_style">$name</a>
        </div>
XML;
    }
    ?>
  </nav>
</aside>
