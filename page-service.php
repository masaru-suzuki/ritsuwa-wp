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

<main id="primary" class="site-main service-page">

  <!-- main visual -->
  <div class="page-top">
    <div class="ttl-box">
      <h1 class="page-ttl">サービス<br><span>service</span></h1>
    </div>
    <div class="main-visual">
      <div class="main-visual__call sp-none">
        <a class="call-btn" href="tel:00000000000"></a><!-- 電話へのリンクをbox全体に広げる-->
        <p class="main-visual-call-number">000-000-0000</p>
        <p class="main-visual-txt">受付時間: 平日:9:00~17:00</p>
      </div>
      <div class="main-visual__links sp-none">
        <a class="facebook" href=""><img class="mv-facebook"
            src="<?php echo bloginfo('template_url'); ?>/images/facebook_blue.png" alt=""></a>
        <a class="instagram" href=""><img class="mv-instagram"
            src="<?php echo bloginfo('template_url'); ?>/images/instagram_blue.png" alt=""></a>
      </div>
    </div>
  </div>

  <!-- lead section -->
  <div class="lead-section">
    <div class="lead-section__ttl">
      <h2 class="sct-ttl2">サービスの特徴<span>feature</span></h2>
    </div>
    <p class="lead-section__lead">利用者のみなさまはそれぞれにいろんな背景を持っていらっしゃいます。それをきちんと受け止められるような場所や人でありたいと思ってケアをしています。</p>
  </div>
  <!-- voice-section -->
  <div class="voice-section">
    <div class="voice-box">
      <div class="voice-box__img-box">
        <img src="<?php echo bloginfo('template_url'); ?>/images/service_01.jpg" alt="">
      </div>
      <div class="voice-box__txt-box">
        <p class="voice-txt">利用者様にとって、<span class="marker-yellow">自宅と同じように居心地よく健やかに過ごせる空間をつくる</span>ことが、私たちのこだわりです。</p>
        <p
          class="voice-txt">施設にこられた当初は、なかなか元気がない方や新しい生活や空間に馴染めない という方でも、<span class="marker-yellow">2〜3ヶ月ほど</span>で、ご自身の身の回りのことができるくらい元気に なられたり、スタッフや利用者様同士の交流が活発になってとても明るくなられます。</p>
        <p
          class="voice-txt">それも、私たちのこだわりが利用者様にとって、居心地の良い空間になっているんだなと思います。健やかに明るく過ごすことで、利用者様の自律の意識が促されて、<span class="marker-yellow">ご自身の身の回りのこともできるようになる</span>方が大勢いらっしゃいます。</p>
        <p
          class="voice-txt">​そうやって生きがいを感じてもらうことで、<span class="marker-yellow">さらに明るく元気になってもらえる</span>という好循環を生み出せるように日々のサポートをさせてもらっています。</p>
      </div>
    </div>
    <div class="voice-box">
      <div class="voice-box__img-box">
        <img src="<?php echo bloginfo('template_url'); ?>/images/service_02.jpg" alt="">
      </div>
      <div class="voice-box__txt-box">
        <p
          class="voice-txt">ご家族様からも、お礼のお言葉をいただいたり、<span class="marker-yellow">リツワにして良かった</span>と喜んでいただいています。そういったお言葉をいただくことがスタッフの励みややりがいにつながって、更なるサービスの向上に繋がっています。</p>
        <p
          class="voice-txt">また、周りの他事業所や地域コミュニティなどのスタッフさんからの反響も良く、<span class="marker-yellow">リツワの事業所を紹介して良かった</span>と言っていただくことがあります。利用者様やご家族の介護の困りごとやご要望はさまざまで、それらにきちんと<span class="marker-yellow">真摯に対応</span>してきました。自分たちでできる限りのことはと、いろんな課題に向き合ってきた結果、<span class="marker-yellow">リツワならきちんと対応してくれる</span>から紹介したいと言っていただくことも増えています。</p>
        <p class="voice-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
      </div>
    </div>
  </div>
  <!-- service-contents section -->
  <div class="servive-contents-section">
    <div class="servive-contents-section__ttl">
      <h2 class="sct-ttl2">リツワのサービス<span>service</span></h2>
    </div>
    <div class="servive-contents-section__container">
      <div class="card-box">
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">通所介護(デイサービス)​<br>地域密着型通所介護</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">訪問介護<br>​定期巡回随時対応型訪問介護看護</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">​訪問看護</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">小規模多機能型居宅介護​看護<br>小規模多機能型居宅介護</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">​居宅介護支援</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">認知症対応型共同生活介護<br>​(グループホーム)</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">​住宅型有料老人ホーム​<br>サービス付き高齢者向け住宅</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">障がい者向けサービス</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
        <div class="card-box__card">
          <img class="card-img" src="<?php echo bloginfo('template_url'); ?>/images/service-card.jpg" alt="">
          <p class="service-card-ttl">​保育園</p>
          <p class="service-card-txt">そうやって、利用者様やご家族様は当然、良いサービスを提供する為にも、他の事業所のスタッフさんからも信頼していただけるように、日々の業務に取り組んでいます。</p>
        </div>
      </div>
    </div>
  </div>
  <!-- cta -->
  <div class="cta-section">
    <div class="cta-section__box">
      <div class="ttl2">
        <h2>求人情報</h2>
      </div>
      <p class="cta-txt">リツワ株式会社の「求人情報」ページです。<br> スタッフインタビューや代表インタビューをはじめ、仕事内容や福利厚生などを掲載しています。</p>
      <a href=""></a>
    </div>
    <div class="cta-section__box">
      <div class="ttl2 contact">
        <h2>お問い合わせ</h2>
      </div>
      <p class="cta-txt">リツワのサービスや事業所に関するお問い合わせはこちらをご覧ください。</p>
      <a href=""></a>
    </div>
  </div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
