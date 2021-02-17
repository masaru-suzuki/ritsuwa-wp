<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ritsuwa
 */

?>



<!-- Category -->
<div class="news-side-link">
  <p class="news-side-link__ttl">カテゴリー</p>
  <ul class="news-side-link__list">
    <li class="news-side-link__item" onclick="location.href='<?php echo get_page_link(18); ?>'">全て</li>
    <li class="news-side-link__item" onclick="location.href='<?php echo get_page_link(18); ?>?id=2'">ブログ</li>
    <li class="news-side-link__item" onclick="location.href='<?php echo get_page_link(18); ?>?id=3'">お知らせ</li>
  </ul>
</div>
<!-- Recent Article -->
<div class="news-side-link">
  <p class="news-side-link__ttl">最新の記事</p>
  <ul class="news-side-link__list">

    <?php

    $wp_query2 = new WP_Query();
    $my_posts = array(
      'post_type' => 'post',
      'post__not_in' => get_option('sticky_posts'),
      'posts_per_page' => '3',
    );
    $wp_query2->query($my_posts);
    if ($wp_query2->have_posts()) : while ($wp_query2->have_posts()) : $wp_query2->the_post();
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
<div class="news-side-link">
  <p class="news-side-link__ttl">アーカイブ</p>
  <ul class="news-side-link__list archives">
    <?php
    // $wp_query2 = new WP_Query();
    $my_posts_archives = array(
      'post_type' => 'post',
      'limit' => '3',
      'show_post_count' => true,
      'type' => 'yearly'
    );
    wp_get_archives2($my_posts_archives);
    // wp_reset_postdata();
    ?>
  </ul>
</div>

<!-- sns link -->
<div class="sns-link">
  <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-facebook fa-2x"></i></a>
  <a href="<?php echo get_page_link(2126); ?>"><i class="fab fa-instagram fa-2x"></i></a>
</div>
