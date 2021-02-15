<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

get_header();
?>

<main id="primary" class="site-main event-page">



  <!-- event section -->
  <div class="event-section">

    <!-- event-section__contents -->
    <div class="event-section__contents">
      <ul class="news-list">
        <p>アーカイブphpです</p>
        <p>pagedは<?php echo $paged; ?></p>
        <p>pagesは<?php echo $wp_query->max_num_pages; ?></p>

        <?php

        //アーカイブの年情報の取得
        $uri = $_SERVER['REQUEST_URI'];
        $year = preg_replace('/[^0-9]/', '', $uri);
        $my_posts_year = array(
          'post_type' => 'post',
          'post__not_in' => get_option('sticky_posts'),
          'posts_per_page' => '-1',
          'paged' => $paged,
          'year' => $year

        );
        $wp_query->query($my_posts_year);

        ?>
        <p>アーカイブphpです</p>
        <p>pagedは<?php echo $paged; ?></p>
        <p>pagedは<?php echo $pages; ?></p>
        <p>pagesは<?php echo $wp_query->max_num_pages; ?></p>
        <p>総ページは<?php echo $wp_query->max_num_pages; ?></p>
        <p>年<?php echo $year; ?></p>
        <p>paged<?php echo $paged; ?></p>


        <?php
        /* Start the Loop */
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



        <?php

          // get_template_part('template-parts/content', get_post_type());

          endwhile;
        endif;
        wp_reset_postdata();

        // the_posts_navigation();


        ?>
      </ul>

      <?php



      if (function_exists('pagenation')) {
        pagenation($my_posts_year);
      } ?>
    </div>

    <!-- event-section__side -->
    <div class="event-section__side">

      <!-- Category -->
      <div class="news-side-link">
        <p class="news-side-link__ttl">カテゴリー</p>
        <ul class="news-side-link__list">
          <li class="news-side-link__item active" onclick="location.href='<?php echo get_page_link(18); ?>'">全て</li>
          <li class="news-side-link__item" onclick="location.href='<?php echo get_page_link(18); ?>?id=2'">ブログ</li>
          <li class="news-side-link__item" onclick="location.href='<?php echo get_page_link(18); ?>?id=3'">お知らせ</li>
        </ul>
      </div>
      <!-- Recent Article -->
      <div class="news-side-link pc">
        <p class="news-side-link__ttl">最新の記事</p>
        <ul class="news-side-link__list">

          <?php

          $wp_query = new WP_Query();
          $my_posts = array(
            'post_type' => 'post',
            'post__not_in' => get_option('sticky_posts'),
            'posts_per_page' => '3',
          );
          $wp_query->query($my_posts);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
              // タイトル
              $title = wp_trim_words(get_the_title(), 13, '...');

              //パーマリンク
              $link = get_the_permalink()

          ?>

          <li class="news-side-link__item" onclick="location.href='<?php echo $link; ?>'"><?php echo $title; ?></li>


          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>

        </ul>
      </div>

      <!-- Archives -->
      <div class="news-side-link pc">
        <p class="news-side-link__ttl">アーカイブ</p>
        <ul class="news-side-link__list archives">
          <?php
          $my_posts_archives = array(
            'post_type' => 'post',
            'limit' => '3',
            'show_post_count' => true,
            'type' => 'yearly'
          );
          wp_get_archives($my_posts_archives);
          ?>
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
