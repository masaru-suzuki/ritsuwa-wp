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

<main id="primary" class="site-main contact-page">


  <h1 class="contact-page-ttl">お問い合わせ</h1>
  <!-- tel section -->
  <div class="page-contact-section">
    <h2 class="contact-page-sct-ttl">電話でのお問い合わせ</h2>
    <div class="comment-box">
      <div class="comment-box__comment">
        <p class="comment-box-txt">施設を探しているので<br class="pc">いろいろ聞きたい</p>
      </div>
      <div class="comment-box__comment">
        <p class="comment-box-txt">入居のことや在宅<br class="pc">での介護のこと</p>
      </div>
      <div class="comment-box__comment">
        <p class="comment-box-txt">介護の困り事や<br class="pc">わからないことがある</p>
      </div>
    </div>
    <div class="tel-box">
      <div class="tel-box__inner">
        <div class="txt-box">
          <p class="tel-box-txt-box-txt">介護や福祉のことならなんでも<br>気軽にご相談ください</p>
        </div>
        <div class="link-box">
          <a href="" class="link-box__link">000-000-0000</a>
          <div class="link-box__txt-box">
            <p class="link-box-txt-box-txt">電話受付時間：9時～17時</p>
            <p class="link-box-txt-box-subtxt">※土曜・日曜・祝日・年末年始を除く</p>
          </div>
        </div>
      </div>
    </div>
    <p class="tel-section-txt">​他事業所の方や弊社のスタッフに用件のある方は各事業所へ直接ご連絡ください。</p>
    <div class="facility-box">
      <a href="" class="facility-box__link">事業所一覧はこちらから</a>
    </div>
  </div>
  <!-- mail section -->
  <div class="page-contact-section">
    <h2 class="contact-page-sct-ttl">メールでのお問い合わせ</h2>
    <div class="flow">
      <dl class="flow__box active">
        <dt class="num">01</dt>
        <dd class="flow-txt">入力</dd>
      </dl>
      <dl class="flow__box">
        <dt class="num">02</dt>
        <dd class="flow-txt">確認</dd>
      </dl>
      <dl class="flow__box">
        <dt class="num">03</dt>
        <dd class="flow-txt">完了</dd>
      </dl>
    </div>
    <div class="caution-box">
      <div class="caution-box__inner">
        <p
          class="caution-box-txt">お問い合わせ、ご要望等がございましたら、以下のフォームに必要事項をご記入いただき、<a href="" class="privacypolicy">プライバシーポリシー</a>をご確認の上、送信してください。</p>
        <p class="coution-box-txt-red">✳︎<span class="space"></span>は必須項目です。</p>
      </div>
    </div>


    <!-- contact-form -->
    <?php get_template_part('/template-parts/content', 'contact-form'); ?>


  </div>
  <!-- end mail-section-->

  <!-- recruit section -->
  <div class="page-contact-section">
    <h2 class="contact-page-sct-ttl">採用に関するお問い合わせ</h2>
    <p class="tel-section-txt">採用情報に関しては、採用サイトからお問い合わせください。</p>
    <div class="facility-box">
      <a href="" class="facility-box__link">採用サイトはこちらから</a>
    </div>
  </div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
