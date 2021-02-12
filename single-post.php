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
<main class="article-page">


  <?php if (have_posts()) : while (have_posts()) : the_post();

      // タイトル
      $title = get_the_title();

      // 記事のカテゴリー情報を取得する
      $cat = get_the_category();
      $cat_name = $cat[0]->cat_name; // カテゴリー名

      //記事のテキスト
      $content = get_the_content();

      //記事のタグを取得(1つ)
      $tag = get_the_tags();
      $tag_name = $tag[0]->name;

      //記事の作成日
      $date = get_the_date('Y-n-j');

      //施設名
      $facility = get_the_author();

  ?>

      <!-- breadcrumb -->
      <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="ホームのURL">
            <span itemprop="name">ホーム</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="カテゴリー1のURL">
            <span itemprop="name">お知らせ一覧</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="カテゴリー2のURL">
            <span itemprop="name">ブログ</span>
          </a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>

      <!-- article section -->
      <div class="article-section">

        <!-- article-section__contents -->
        <div class="article-section__contents">
          <div class="article">
            <div class="article__ttl">
              <div class="tag">
                <p class="tag-txt"><?php echo $cat_name; ?></p>
              </div>
              <h1 class="article-ttl"><?php echo $title; ?></h1>
              <p class="article-info"><?php echo $date; ?><span class="article-info-divide">|</span><?php echo $facility; ?></p>
            </div>
            <div class="article__contents">
              <?php the_content(); ?>
            </div>
          </div>


          <!-- page-nation -->
          <?php
          $prev_post = get_previous_post();
          if (!empty($prev_post)) {
            $prev_url = get_permalink($prev_post->ID);
          }

          $next_post = get_next_post();
          if (!empty($next_post)) {
            $next_url = get_permalink($next_post->ID);
          }
          ?>
          <div class="page-nation02">
            <a href="<?php echo $prev_url; ?>" class="page-nation-link prev">前の記事</a>
            <a href="<?php echo get_page_link(18); ?>" class="page-nation-link back-list">一覧に戻る</a>
            <a href="<?php echo $next_url; ?>" class="page-nation-link move-next">次の記事</a>
          </div>
        </div>

        <!-- event-section__side -->
        <div class="article-section__side">

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
</main>
<?php endwhile;
  endif; ?>




<?php
// get_sidebar();
get_footer();
