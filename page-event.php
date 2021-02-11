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

<main id="primary" class="site-main event-page">

  <!-- main visual -->
  <div class="page-top">
    <div class="ttl-box">
      <h1 class="page-ttl">お知らせ一覧<br><span>news</span></h1>
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
      <h2 class="sct-ttl2">イベント・お知らせ<span>news</span></h2>
    </div>
    <p class="lead-section__lead">各事業所ごとに現場のスタッフがいろいろとアイディアを出し合って、毎回利用者様に楽しんでもらっています。</p>
    <p class="lead-section__lead">こういったイベントや行事も手づくり感があって、リツワらしいアットホームな雰囲気になっています。</p>
  </div>

  <!-- event section -->
  <div class="event-section">

    <!-- event-section__contents -->
    <div class="event-section__contents">
      <ul class="news-list">
        <?php
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'post',
          'posts_per_page' => '50',
        );
        $wp_query->query($my_posts);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            // タイトル
            $title = wp_trim_words(get_the_title(), 10, '...');

            // 記事のカテゴリー情報を取得する
            $cat = get_the_category();
            $cat_name = $cat[0]->cat_name; // カテゴリー名

            //記事のテキスト
            $content = wp_trim_words(get_the_content(), 60, '...');

            //記事のタグを取得(1つ)
            $tag = get_the_tags();
            $tag_name = $tag[0]->name;

            //記事の作成日
            $date = get_the_date('Y-n-j');

            //施設名
            $facility = get_the_author();
        ?>
        <li class="news-card">
          <a id="<?php echo the_ID(); ?>" class="news-card__link" onmouseover="addHoverClass(this.id)"
            onmouseout="removeHoverClass(this.id)" href="<?php the_permalink(); ?>"></a>
          <div class="tag">
            <p class="tag-txt"><?php echo $cat_name; ?></p>
          </div>
          <div class="news-card__img-box">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <div class="news-card__txt-box">
            <h3 class="news-card-ttl"><?php echo $title; ?></h3>
            <p class="news-card-txt"><?php echo $content; ?></p>
            <p
              class="news-card-info"><?php echo $date; ?><span class="news-card__info-divide">|</span><?php echo $facility; ?></p>
          </div>
        </li>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>
      <div class="page-nation01">
        <div class="return-area">
          <a href="" class="page-nation-link return-first">最初</a>
          <a href="" class="page-nation-link prev">前へ</a>
        </div>
        <div class="move-area">
          <a href="" class="page-nation-link move-next">次へ</a>
          <a href="" class="page-nation-link move-last">最後</a>
        </div>
      </div>
    </div>

    <!-- event-section__side -->
    <div class="event-section__side">

      <!-- Category -->
      <div class="news-side-link">
        <p class="news-side-link__ttl">カテゴリー</p>
        <ul class="news-side-link__list">
          <li class="news-side-link__item active" onclick="location.href=''">全て</li>
          <li class="news-side-link__item" onclick="location.href=''">お知らせ</li>
          <li class="news-side-link__item" onclick="location.href=''">ブログ</li>
        </ul>
      </div>
      <!-- Recent Article -->
      <div class="news-side-link pc">
        <p class="news-side-link__ttl">最新の記事</p>
        <ul class="news-side-link__list">
          <li class="news-side-link__item" onclick="location.href=''">2020年度の年末年始休暇…</li>
          <li class="news-side-link__item" onclick="location.href=''">誕生日&バーベキュー大会…</li>
          <li class="news-side-link__item" onclick="location.href=''">リツワのサイトをリニュー…</li>
        </ul>
      </div>

      <!-- Archives -->
      <div class="news-side-link pc">
        <p class="news-side-link__ttl">アーカイブ</p>
        <ul class="news-side-link__list archives">
          <li class="news-side-link__item" onclick="location.href=''">2020年12月</li>
          <li class="news-side-link__item" onclick="location.href=''">2020年10月</li>
          <li class="news-side-link__item" onclick="location.href=''">2020年9月</li>
        </ul>
      </div>

      <!-- sns link -->
      <div class="sns-link">
        <a href=""><i class="fab fa-facebook fa-2x"></i></a>
        <a href=""><i class="fab fa-instagram fa-2x"></i></a>
      </div>

    </div><!-- /event-section__side -->

  </div><!-- /event section -->

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
