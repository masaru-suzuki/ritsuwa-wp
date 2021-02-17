<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ritsuwa
 */

?>

<footer id="colophon" class="site-footer">
  <div class="footer-wrapper">
    <div class="footer-wrapper__left-box">
      <img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="">
      <p class="footer-txt">株式会社<span class="space"></span>リツワ</p>
      <p class="footer-txt">〒989-5301<span class="space"></span><br class="pc-none">栗原市栗町岩ヶ崎相木沢66番地</p>
      <p class="footer-txt"><a href="">TEL : 000-000-0000</a></p>
      <!-- sns link -->
      <?php get_template_part('/template-parts/content', 'sns-link-box'); ?>
    </div>
    <div class="footer-wrapper__center-box">
      <ul>
        <li><a class="footer-txt" href="<?php echo get_page_link(14); ?>">サービス一覧</a></li>
        <li><a class="footer-txt" href="<?php echo get_page_link(18); ?>">お知らせ</a></li>
        <li><a class="footer-txt" href="<?php echo get_page_link(16); ?>">施設一覧</a></li>
      </ul>
    </div>
    <div class="footer-wrapper__right-box">
      <a href="<?php echo get_page_link(2126); ?>" class="btn-round grayblue">お問い合わせ</a>
      <a href="" class="btn-round darkblue">採用サイトへ</a>
    </div>
  </div>
  <p class="copyright">
    &copy; <?php echo date('Y'); ?><?php bloginfo('name'); ?>. All rights reserved.
  </p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
