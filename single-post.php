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
  <?php get_template_part('/template-parts/content', 'breadcrumb'); ?>

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
          <p
            class="article-info"><?php echo $date; ?><span class="article-info-divide">|</span><?php echo $facility; ?></p>
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

    <!-- article-section__side -->
    <div class="article-section__side">
      <?php get_sidebar(); ?>
    </div>

  </div><!-- /event section -->

  <!-- cta -->
  <?php get_template_part('/template-parts/content', 'cta'); ?>
</main>
<?php endwhile;
  endif; ?>




<?php
// get_sidebar();
get_footer();
