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

<main id="primary" class="site-main contact-finish-page">


  <h1 class="contact-page-ttl">お問い合わせ</h1>
  <!-- mail section -->
  <div class="page-contact-section">
    <div class="flow">
      <dl class="flow__box">
        <dt class="num">01</dt>
        <dd class="flow-txt">入力</dd>
      </dl>
      <dl class="flow__box">
        <dt class="num">02</dt>
        <dd class="flow-txt">確認</dd>
      </dl>
      <dl class="flow__box active">
        <dt class="num">03</dt>
        <dd class="flow-txt">完了</dd>
      </dl>
    </div>
  </div>
  <!-- message -->
  <div class="message-box">
    <p class="thanks-page-ttl black">お問い合わせ<br class="sp">ありがとうございました</p>
    <p class="thanks-page-txt">内容を確認させていただき、担当者からご連絡させていただきます。<br>
      お急ぎの場合は下記の電話番号よりご連絡ください。</p>
    <div class="facility-box">
      <a href="" class="facility-box__link">TEL<span class="space">：</span>000-000-0000</a>
    </div>
  </div>
  <a href="<?php echo home_url('/'); ?>" class="btn-round clear wide">ホームへ戻る</a>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
