<?php

/**
 * ritsuwa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ritsuwa
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

if (!function_exists('ritsuwa_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function ritsuwa_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ritsuwa, use a find and replace
		 * to change 'ritsuwa' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('ritsuwa', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'menu-1' => esc_html__('Primary', 'ritsuwa'),
      )
    );

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
      'custom-background',
      apply_filters(
        'ritsuwa_custom_background_args',
        array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )
      )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action('after_setup_theme', 'ritsuwa_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ritsuwa_content_width()
{
  $GLOBALS['content_width'] = apply_filters('ritsuwa_content_width', 640);
}
add_action('after_setup_theme', 'ritsuwa_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ritsuwa_widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'ritsuwa'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'ritsuwa'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'ritsuwa_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ritsuwa_scripts()
{
  wp_enqueue_style('ritsuwa-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_style_add_data('ritsuwa-style', 'rtl', 'replace');

  wp_enqueue_script('ritsuwa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'ritsuwa_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define('WP_SCSS_ALWAYS_RECOMPILE', true);
/* ================================================================================ */



/**
 * JSファイルを読み込ませる
 * jqueryの後に読み込み
 * バージョン指定なし
 * body終了タグ直前に読み込み
 */
function load_scripts()
{
  if ($pagename = get_query_var('pagename')) {
    if (file_exists(get_stylesheet_directory() . '/js/' . $pagename . '.js')) {
      wp_enqueue_script($pagename, get_stylesheet_directory_uri() . '/js/' . $pagename . '.js', array('jquery'), null, true);
    }
  }
}
add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * アイキャッチ画像を設定していない場合、投稿ページの1枚目の画像を表示する
 */
function catch_first_image()
{
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if (empty($first_img)) { //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}


/**
 * ページネーション
 */

function pagenation($arg, $pages = '', $range = 2)
{

  global $paged;

  if (empty($paged)) $paged = 1;
  if ($pages == '') {
    global $wp_query;
    $wp_query->query($arg);
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }
  if (1 != $pages) {

    echo "<div class=\"page-nation01\">";

    /*
    *return-areaここから
     */
    echo "<div class=\"return-area\">";
    echo $paged;
    echo $wp_query->max_num_pages;


    if (is_numeric($paged) && $paged == 1) {
      //1ページ目の時は【最初】【前へ】を表示しない
      echo "<div class=\"page-nation-link return-first empty\"> </div>";
      echo "<div class=\"page-nation-link prev empty\"> </div>";
    } else if (is_numeric($paged) && $paged == 2) {
      //2ページ目の時は【最初】を表示せず、【前へ】のみ表示
      echo "<div class=\"page-nation-link return-first empty\"> </div>";
      echo "<a href='" . get_pagenum_link($paged - 1) . "' class=\"page-nation-link prev\">前へ</a>";
    } else if (is_numeric($paged) && $paged > 2) {
      //3ページ目以降【最初】【前へ】を表示
      echo "<a href='" . get_pagenum_link(1) . "' class=\"page-nation-link return-first\">最初</a>";
      echo "<a href='" . get_pagenum_link($paged - 1) . "' class=\"page-nation-link prev\">前へ</a>";
    } else {
      echo '正しくページ番号を入力してください';
      exit();
    }

    echo "</div>";
    /**
     * /return-areaここまで
     *  */

    /*
    * move-areaここから
     */
    echo "<div class=\"move-area\">";
    // echo $paged;
    // echo $pages;
    if (is_numeric($paged) && $paged - $pages <  -1) {
      //最後から3ページ目以前【最後】【次へ】を表示
      echo "<a href='" . get_pagenum_link($paged + 1) . "' class=\"page-nation-link move-next\">次へ</a>";
      echo "<a href='" . get_pagenum_link($pages) . "' class=\"page-nation-link move-last\">最後</a>";
    } else if (is_numeric($paged) && $paged - $pages == -1) {
      //最後から1つ前ページの時は【最後】を表示せず、【次へ】のみ表示
      echo "<div class=\"page-nation-link move-last empty\"></div>";
      echo "<a href='" . get_pagenum_link($paged + 1) . "' class=\"page-nation-link move-next\">次へ</a>";
    } else if (is_numeric($paged) && $paged - $pages == 0) {
      //最後ページ目の時は【最後】【次へ】を表示しない
      echo "<div class=\"page-nation-link move-next empty\"></div>";
      echo "<div class=\"page-nation-link move-last empty\"></div>";
    } else {
      echo '正しくページ番号を入力してください';
    }

    echo "</div>";
    /**
     * /return-areaここまで
     *  */


    echo "</div>\n";
  } else {
    echo '1ページのみ';
    echo "<div class=\"m-pagenation__result\">" . $paged . "/" . $pages . "</div>";
  }
}
