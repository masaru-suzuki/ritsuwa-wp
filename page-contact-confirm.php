<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

get_header();
?>

<main id="primary" class="site-main contact-confirm-page">


  <h1 class="contact-page-ttl">お問い合わせ</h1>
  <!-- mail section -->
  <div class="page-contact-section">
    <div class="flow">
      <dl class="flow__box">
        <dt class="num">01</dt>
        <dd class="flow-txt">入力</dd>
      </dl>
      <dl class="flow__box active">
        <dt class="num">02</dt>
        <dd class="flow-txt">確認</dd>
      </dl>
      <dl class="flow__box">
        <dt class="num">03</dt>
        <dd class="flow-txt">完了</dd>
      </dl>
    </div>

    <!-- contact-form -->
    <?php get_template_part('/template-parts/content', 'contact-form'); ?>

  </div>
  <!-- end mail-section-->


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
