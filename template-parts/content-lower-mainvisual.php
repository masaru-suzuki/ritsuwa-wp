<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */
?>

<!-- main visual -->
<div class="page-top">
  <div class="ttl-box">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="page-ttl"><?php the_title(); ?><br><span><?php echo $post->post_name; ?></span></h1>
    <?php endwhile;
    endif; ?>
    </ul>
  </div>
  <div class="main-visual">
    <div class="main-visual__call sp-none">
      <a class="call-btn" href="tel:00000000000"></a><!-- 電話へのリンクをbox全体に広げる-->
      <p class="main-visual-call-number">000-000-0000</p>
      <p class="main-visual-txt">受付時間: 平日:9:00~17:00</p>
    </div>
    <div class="sns-link main-visual__links sp-none"><i class="fab fa-facebook fa-2x"></i><i
        class="fab fa-instagram fa-2x"></i></div>

  </div>
</div>
