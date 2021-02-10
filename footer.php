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
      <div class="sns-link"><i class="fab fa-facebook fa-2x"></i><i class="fab fa-instagram fa-2x"></i></div>
    </div>
    <div class="footer-wrapper__center-box">
      <ul>
        <li><a class="footer-txt" href="">サービス一覧</a></li>
        <li><a class="footer-txt" href="">お知らせ</a></li>
        <li><a class="footer-txt" href="">施設一覧</a></li>
      </ul>
    </div>
    <div class="footer-wrapper__right-box">
      <a href="" class="btn-round grayblue">お問い合わせ</a>
      <a href="" class="btn-round darkblue">採用サイトへ</a>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
