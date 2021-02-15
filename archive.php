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


        <?php

        //アーカイブの年情報の取得
        $year = strval(get_query_var('year'));
        $page_limit = get_option('posts_per_page');

        $my_posts_year = array(
          'post_type' => 'post',
          'post__not_in' => get_option('sticky_posts'),
          'posts_per_page' => $page_limit,
          'paged' => $paged,
          'year' => $year

        );
        // $wp_query = new WP_Query();
        $wp_query->query($my_posts_year);

        ?>
        <!-- <p>アーカイブphpです</p>
        <p><?php echo $year; ?></p>
        <p>pagesは<?php echo $wp_query->max_num_pages; ?></p>
        <p>pagedは<?php echo $paged; ?></p> -->

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

      <!-- pagenation -->
      <?php
      if (function_exists('mr_the_archive_pager')) mr_the_archive_pager($wp_query);
      ?>
    </div>

    <!-- event-section__side -->
    <div class="event-section__side">
      <?php get_sidebar(); ?>
    </div>

</main><!-- #main -->

<?php
get_footer();
