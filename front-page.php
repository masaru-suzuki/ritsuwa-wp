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

<main id="primary" class="site-main front-page">


  <!-- main visual -->
  <div class="main-visual">
    <img class="main-visual__lead" src="<?php echo bloginfo('template_url'); ?>/images/mv_lead.png" alt="">
    <div class="main-visual__call sp-none">
      <a class="call-btn" href="tel:00000000000"></a><!-- 電話へのリンクをbox全体に広げる-->
      <p class="main-visual-call-number">000-000-0000</p>
      <p class="main-visual-txt">受付時間: 平日:9:00~17:00</p>
    </div>
    <div class="sns-link main-visual__links sp-none"><i class="fab fa-facebook fa-2x"></i><i class="fab fa-instagram fa-2x"></i></div>
    <div class="main-visual__news sp-none">
      <!-- 最新の投稿記事の取得 -->
      <?php
      $args = array(
        'posts_per_page' => 1 // 表示件数の指定
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : // ループの開始
        setup_postdata($post); // 記事データの取得
      ?>
        <a class="news-link" href="<?php the_permalink(); ?>"></a><!-- newsへのリンクをbox全体に広げる-->
        <p class="main-visual__news--header main-visual-txt">NEWS</p>
        <dl class="main-visual__news--articlw">
          <dt class="news-ymd main-visual-txt"><?php echo get_the_date('Y-n-j'); ?></dt>
          <dd class="news-ttl main-visual-txt"><?php the_title(); ?></dd>
        <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
        ?>
        </dl>
    </div>
  </div>

  <!-- service section -->
  <div class="service-section">
    <div class="service-section__img-box pc">
      <img src="<?php echo bloginfo('template_url'); ?>/images/ikigai.jpg" alt="">
    </div>
    <div class="service-section__txt-box">
      <div class="txt-box">
        <h2 class="sct-ttl kakko"><span class="txt-whiteblue">生きがい</span><span class="sub-ttl1">を感じてもらいたい</span><span class="sub-ttl">それが私たちの願いです。</span></h2>
        <p>お元気になられてご自身の生きがいにつながる…そんなところでありたいと思っています。</p>
        <p>その為には、ご自身の家で過ごすような健やかな生活が必要だと考え、リツワで働く全員が、みなさまが楽しく健やかな暮らしを送れるように全力でサポートさせてもらっています。</p>
        <a href="<?php echo get_page_link(14); ?>" class="btn-round">サービス一覧</a>
      </div>
    </div>
  </div>

  <!-- facility section -->
  <div class="facility-section">
    <div class="facility-section__txt-box">
      <div class="txt-box">
        <h2 class="sct-ttl">まるで<br>自分の家にいるような<br>居心地の良い空間</h2>
        <img class="img-box01 pc-none" src="<?php echo bloginfo('template_url'); ?>/images/top_facility01.jpg" alt="">
        <p>リツワの施設は、まるで自宅に居るかのようなアットホームな雰囲気を重視してつくられています。それが、利用者様の笑顔やご自身が元気になることに繋がっています。</p>
        <p>どんな人でも、「その人らしい生活を送ることができる」そんなことを可能にしてくれる環境づくりに日々取り組んでいます。</p>
        <a href="<?php echo get_page_link(16); ?>" class="btn-round">施設一覧</a>
      </div>
    </div>
    <div class="facility-section__img-box pc">
      <img class="img-box01" src="<?php echo bloginfo('template_url'); ?>/images/top_facility01.jpg" alt="">
      <img class="img-box02" src="<?php echo bloginfo('template_url'); ?>/images/top_facility02.jpg" alt="">
    </div>
  </div>

  <!-- news section -->
  <div class="news-section">
    <div class="news-section__inner">
      <div class="contents-wrapper">
        <div class="txt-box">
          <div class="ttl-box">
            <img src="<?php echo bloginfo('template_url'); ?>/images/speach.png" alt="">
            <h2 class="sct-ttl">お知らせ</h2>
          </div>
          <p>現場のスタッフが自分たちでいろいろと工夫をしながら、それぞれの事業所でイベントや行事を行っています。そこには、スタッフだけではなく、利用者様や地域も巻き込んで、みんなで楽しい催しにしているので、それがアットホームな雰囲気に繋がっているのかもしれません。</p>
        </div>
        <div class="news-box">
          <h2 class="sub-ttl">NEWS</h2>
          <table class="news-table">

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
                $title = wp_trim_words(get_the_title(), 10, '...');

                // 記事のカテゴリー情報を取得する
                $cat = get_the_category();
                $cat_name = $cat[0]->cat_name; // カテゴリー名

                //記事のテキスト
                $content = wp_trim_words(get_the_content(), 14, '...');

                //記事のタグを取得(1つ)
                $tag = get_the_tags();
                $tag_name = $tag[0]->name;

                //記事の作成日
                $date = get_the_date('Y-n-j');

                //施設名
                $facility = get_the_author();
            ?>
                <tr>
                  <td class="table-txt ymd"><?php echo $date; ?></td>
                  <td class="table-txt"><?php echo $title; ?></td>
                  <td class="table-txt"><?php echo $content; ?></td>
                </tr>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

          </table>

          <a href="<?php echo get_page_link(18); ?>" class="btn-round">お知らせ一覧</a>
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
