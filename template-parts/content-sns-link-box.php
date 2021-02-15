<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

?>

<?php if (is_page() || is_front_page()) : ?>
  <div class="sns-link main-visual__links sp-none">
    <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-instagram fa-2x"></i></a>
  </div>
<?php else : //footerはこっち
?>
  <div class="sns-link">
    <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-instagram fa-2x"></i></a>
  </div>
<?php endif; ?>
