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
  <?php get_template_part('/template-parts/content', 'lower-mainvisual'); ?>

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
        $page_limit = get_option('posts_per_page');

        if (empty($_REQUEST['id'])) {
          $my_posts = array(
            'post_type' => 'post',
            'post__not_in' => get_option('sticky_posts'),
            'paged' => $paged,
          );
        } else {
          $id = htmlspecialchars($_REQUEST['id']);
          $my_posts = array(
            'post_type' => 'post',
            'post__not_in' => get_option('sticky_posts'),
            'paged' => $paged,
            'cat' => $id
          );
        }

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
              <a id="<?php echo the_ID(); ?>" class="news-card__link" onmouseover="addHoverClass(this.id)" onmouseout="removeHoverClass(this.id)" href="<?php the_permalink(); ?>"></a>
              <div class="tag">
                <p class="tag-txt"><?php echo $cat_name; ?></p>
              </div>
              <div class="news-card__img-box">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="news-card__txt-box">
                <h3 class="news-card-ttl"><?php echo $title; ?></h3>
                <p class="news-card-txt"><?php echo $content; ?></p>
                <p class="news-card-info"><?php echo $date; ?><span class="news-card__info-divide">|</span><?php echo $facility; ?></p>
              </div>
            </li>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>

      <!-- pagenation -->
      <?php
      if (function_exists('mr_the_archive_pager')) mr_the_archive_pager($wp_query);
      ?>

    </div>
    <!-- /event-section__contents -->


    <!-- event-section__side -->
    <div class="event-section__side" id="page-event-sidebar">
      <?php get_sidebar(); ?>
    </div>
    <!-- /event-section__side -->

  </div><!-- /event section -->

  <!-- cta -->
  <?php get_template_part('/template-parts/content', 'cta'); ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
