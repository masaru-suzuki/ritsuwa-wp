<?php

/**
 * ritsuwa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ritsuwa
 */



/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define('WP_SCSS_ALWAYS_RECOMPILE', true);


/**
 * JSファイルを読み込ませる
 * バージョン指定なし
 */
function load_scripts()
{
  //共通のjsファイルを読み込む
  wp_enqueue_script('theme-common', get_template_directory_uri() . '/js/common.js', array(), '20200215', true);

  //固定ページごとにjsを個別に読み込む
  if ($pagename = get_query_var('pagename')) {
    if (file_exists(get_stylesheet_directory() . '/js/' . $pagename . '.js')) {
      //jqueryの後に読み込む
      wp_enqueue_script($pagename, get_stylesheet_directory_uri() . '/js/' . $pagename . '.js', array('jquery'), null, true);
    }
  }
  //archive.phpでjs読み込み
  if (is_archive() || is_single()) {
    wp_enqueue_script('archive-js', get_template_directory_uri() . '/js/event.js', array(), '20200215', true);
  }
}
add_action('wp_enqueue_scripts', 'load_scripts');


/**
 * ページネーション
 */

function mr_the_archive_pager($query)
{
  /*
  $query => この関数を利用するインスタンス化したクエリー
  */

  //page設定
  $paged = get_query_var('paged');
  if (empty($paged) || !is_numeric($paged)) {
    $paged = 1;
  }
  $page_limit = get_option('posts_per_page');
  $prev = $paged - 1;
  $next = $paged + 1;
  $post_count = $query->found_posts; //全体記事数
  $pages = ceil($post_count / $page_limit); //全体のページ数

  //投稿数が最大表示件数を上回る場合のみページネーション表示
  if ($post_count > $page_limit) {
    //リンク設定
    $link_first = get_pagenum_link('0');
    $link_prev = get_pagenum_link($prev);
    $link_next = get_pagenum_link($next);
    $link_last = get_pagenum_link(strval($pages));

    //link_btn
    $link_first_btn = "<a href='" . $link_first . "' class=\"page-nation-link return-first\">最初</a>";
    $link_prev_btn = "<a href='" . $link_prev . "' class=\"page-nation-link prev\">前へ</a>";
    $link_next_btn = "<a href='" . $link_next . "' class=\"page-nation-link move-next\">次へ</a>";
    $link_last_btn = "<a href='" . $link_last . "' class=\"page-nation-link move-last\">最後</a>";



    //pagenatino の利用
    echo "<div class=\"page-nation01\">";
    // return-area
    echo "<div class=\"return-area\">";
    if ($paged == 1) {
      //1ページ目の時は【最初】【前へ】を表示しない
      // echo $link_first_btn_empty;
      // echo $link_prev_btn_empty;
    } else if ($paged == 2) {
      //2ページ目の時は【最初】を表示せず、【前へ】のみ表示
      // echo $link_first_btn_empty;
      echo $link_prev_btn;
    } else if ($paged > 2) {
      //3ページ目以降【最初】【前へ】を表示
      echo $link_first_btn;
      echo $link_prev_btn;
    } else {
      echo '正しくページ番号を入力してください';
      exit();
    }
    echo "</div>";

    //move-area
    echo "<div class=\"move-area\">";
    if ($paged - $pages <  -1) {
      //最後から3ページ目以前【最後】【次へ】を表示
      echo $link_next_btn;
      echo $link_last_btn;
    } else if ($paged - $pages == -1) {
      //最後から1つ前ページの時は【最後】を表示せず、【次へ】のみ表示
      echo $link_next_btn;
      // echo $link_last_btn_empty;
    } else if ($paged - $pages == 0) {
      //最後ページ目の時は【最後】【次へ】を表示しない
    } else {
      echo '正しくページ番号を入力してください';
    }

    echo "</div>";
    echo "</div>\n";
  }
}




/**
 *archives に "news-side-link__item" classをつける
 *general-templateから wp_get_archives() get_archives_link2()をコピーして編集
 *利用は get_archives_link22()として



 * Retrieve archive link content based on predefined or custom code.
 *
 * The format can be one of four styles. The 'link' for head element, 'option'
 * for use in the select element, 'html' for use in list (either ol or ul HTML
 * elements). Custom content is also supported using the before and after
 * parameters.
 *
 * The 'link' format uses the `<link>` HTML element with the **archives**
 * relationship. The before and after parameters are not used. The text
 * parameter is used to describe the link.
 *
 * The 'option' format uses the option HTML element for use in select element.
 * The value is the url parameter and the before and after parameters are used
 * between the text description.
 *
 * The 'html' format, which is the default, uses the li HTML element for use in
 * the list HTML elements. The before parameter is before the link and the after
 * parameter is after the closing link.
 *
 * The custom format uses the before parameter before the link ('a' HTML
 * element) and the after parameter after the closing link tag. If the above
 * three values for the format are not used, then custom format is assumed.
 *
 * @since 1.0.0
 * @since 5.2.0 Added the `$selected` parameter.
 *
 * @param string $url      URL to archive.
 * @param string $text     Archive text description.
 * @param string $format   Optional. Can be 'link', 'option', 'html', or custom. Default 'html'.
 * @param string $before   Optional. Content to prepend to the description. Default empty.
 * @param string $after    Optional. Content to append to the description. Default empty.
 * @param bool   $selected Optional. Set to true if the current page is the selected archive page.
 * @return string HTML link content for archive.
 */
function get_archives_link2($url, $text, $format = 'html', $before = '', $after = '', $selected = false)
{
  $text         = wptexturize($text);
  $url          = esc_url($url);
  $aria_current = $selected ? ' aria-current="page"' : '';

  if ('link' === $format) {
    $link_html = "\t<link rel='archives' title='" . esc_attr($text) . "' href='$url' />\n";
  } elseif ('option' === $format) {
    $selected_attr = $selected ? " selected='selected'" : '';
    $link_html     = "\t<option value='$url'$selected_attr>$before $text $after</option>\n";
  } elseif ('html' === $format) {
    $link_html = "\t<li class=\"news-side-link__item\">$before<a href='$url'$aria_current>$text</a>$after</li>\n";
  } else { // Custom.
    $link_html = "\t$before<a href='$url'$aria_current>$text</a>$after\n";
  }

  /**
   * Filters the archive link content.
   *
   * @since 2.6.0
   * @since 4.5.0 Added the `$url`, `$text`, `$format`, `$before`, and `$after` parameters.
   * @since 5.2.0 Added the `$selected` parameter.
   *
   * @param string $link_html The archive HTML link content.
   * @param string $url       URL to archive.
   * @param string $text      Archive text description.
   * @param string $format    Link format. Can be 'link', 'option', 'html', or custom.
   * @param string $before    Content to prepend to the description.
   * @param string $after     Content to append to the description.
   * @param bool   $selected  True if the current page is the selected archive.
   */
  return apply_filters('get_archives_link2', $link_html, $url, $text, $format, $before, $after, $selected);
}


function wp_get_archives2($args = '')
{
  global $wpdb, $wp_locale;

  $defaults = array(
    'type'            => 'monthly',
    'limit'           => '',
    'format'          => 'html',
    'before'          => '',
    'after'           => '',
    'show_post_count' => false,
    'echo'            => 1,
    'order'           => 'DESC',
    'post_type'       => 'post',
    'year'            => get_query_var('year'),
    'monthnum'        => get_query_var('monthnum'),
    'day'             => get_query_var('day'),
    'w'               => get_query_var('w'),
  );

  $parsed_args = wp_parse_args($args, $defaults);

  $post_type_object = get_post_type_object($parsed_args['post_type']);
  if (
    !is_post_type_viewable($post_type_object)
  ) {
    return;
  }

  $parsed_args['post_type'] = $post_type_object->name;

  if (
    '' === $parsed_args['type']
  ) {
    $parsed_args['type'] = 'monthly';
  }

  if (
    !empty($parsed_args['limit'])
  ) {
    $parsed_args['limit'] = absint($parsed_args['limit']);
    $parsed_args['limit'] = ' LIMIT ' . $parsed_args['limit'];
  }

  $order = strtoupper($parsed_args['order']);
  if (
    'ASC' !== $order
  ) {
    $order = 'DESC';
  }

  // This is what will separate dates on weekly archive links.
  $archive_week_separator = '&#8211;';

  $sql_where = $wpdb->prepare("WHERE post_type = %s AND post_status = 'publish'", $parsed_args['post_type']);

  /**
   * Filters the SQL WHERE clause for retrieving archives.
   *
   * @since 2.2.0
   *
   * @param string $sql_where   Portion of SQL query containing the WHERE clause.
   * @param array  $parsed_args An array of default arguments.
   */
  $where = apply_filters('getarchives_where', $sql_where, $parsed_args);

  /**
   * Filters the SQL JOIN clause for retrieving archives.
   *
   * @since 2.2.0
   *
   * @param string $sql_join    Portion of SQL query containing JOIN clause.
   * @param array  $parsed_args An array of default arguments.
   */
  $join = apply_filters('getarchives_join', '', $parsed_args);

  $output = '';

  $last_changed = wp_cache_get_last_changed('posts');

  $limit = $parsed_args['limit'];

  if (
    'monthly' === $parsed_args['type']
  ) {
    $query   = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date $order $limit";
    $key     = md5($query);
    $key     = "wp_get_archives:$key:$last_changed";
    $results = wp_cache_get($key, 'posts');
    if (!$results) {
      $results = $wpdb->get_results($query);
      wp_cache_set($key, $results, 'posts');
    }
    if ($results) {
      $after = $parsed_args['after'];
      foreach ((array) $results as $result) {
        $url = get_month_link($result->year, $result->month);
        if ('post' !== $parsed_args['post_type']) {
          $url = add_query_arg('post_type', $parsed_args['post_type'], $url);
        }
        /* translators: 1: Month name, 2: 4-digit year. */
        $text = sprintf(__('%1$s %2$d'), $wp_locale->get_month($result->month), $result->year);
        if ($parsed_args['show_post_count']) {
          $parsed_args['after'] = '&nbsp;(' . $result->posts . ')' . $after;
        }
        $selected = is_archive() && (string) $parsed_args['year'] === $result->year && (string) $parsed_args['monthnum'] === $result->month;
        $output  .= get_archives_link2($url, $text, $parsed_args['format'], $parsed_args['before'], $parsed_args['after'], $selected);
      }
    }
  } elseif ('yearly' === $parsed_args['type']) {
    $query   = "SELECT YEAR(post_date) AS `year`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date) ORDER BY post_date $order $limit";
    $key     = md5($query);
    $key     = "wp_get_archives:$key:$last_changed";
    $results = wp_cache_get($key, 'posts');
    if (!$results) {
      $results = $wpdb->get_results($query);
      wp_cache_set($key, $results, 'posts');
    }
    if ($results) {
      $after = $parsed_args['after'];
      foreach ((array) $results as $result) {
        $url = get_year_link($result->year);
        if ('post' !== $parsed_args['post_type']) {
          $url = add_query_arg('post_type', $parsed_args['post_type'], $url);
        }
        $text = sprintf('%d', $result->year);
        if ($parsed_args['show_post_count']) {
          $parsed_args['after'] = '&nbsp;(' . $result->posts . ')' . $after;
        }
        $selected = is_archive() && (string) $parsed_args['year'] === $result->year;
        $output  .= get_archives_link2($url, $text, $parsed_args['format'], $parsed_args['before'], $parsed_args['after'], $selected);
      }
    }
  } elseif ('daily' === $parsed_args['type']) {
    $query   = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, DAYOFMONTH(post_date) AS `dayofmonth`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date), DAYOFMONTH(post_date) ORDER BY post_date $order $limit";
    $key     = md5($query);
    $key     = "wp_get_archives:$key:$last_changed";
    $results = wp_cache_get($key, 'posts');
    if (!$results) {
      $results = $wpdb->get_results($query);
      wp_cache_set($key, $results, 'posts');
    }
    if ($results) {
      $after = $parsed_args['after'];
      foreach ((array) $results as $result) {
        $url = get_day_link($result->year, $result->month, $result->dayofmonth);
        if ('post' !== $parsed_args['post_type']) {
          $url = add_query_arg('post_type', $parsed_args['post_type'], $url);
        }
        $date = sprintf('%1$d-%2$02d-%3$02d 00:00:00', $result->year, $result->month, $result->dayofmonth);
        $text = mysql2date(get_option('date_format'), $date);
        if ($parsed_args['show_post_count']) {
          $parsed_args['after'] = '&nbsp;(' . $result->posts . ')' . $after;
        }
        $selected = is_archive() && (string) $parsed_args['year'] === $result->year && (string) $parsed_args['monthnum'] === $result->month && (string) $parsed_args['day'] === $result->dayofmonth;
        $output  .= get_archives_link2($url, $text, $parsed_args['format'], $parsed_args['before'], $parsed_args['after'], $selected);
      }
    }
  } elseif ('weekly' === $parsed_args['type']) {
    $week    = _wp_mysql_week('`post_date`');
    $query   = "SELECT DISTINCT $week AS `week`, YEAR( `post_date` ) AS `yr`, DATE_FORMAT( `post_date`, '%Y-%m-%d' ) AS `yyyymmdd`, count( `ID` ) AS `posts` FROM `$wpdb->posts` $join $where GROUP BY $week, YEAR( `post_date` ) ORDER BY `post_date` $order $limit";
    $key     = md5($query);
    $key     = "wp_get_archives:$key:$last_changed";
    $results = wp_cache_get($key, 'posts');
    if (!$results) {
      $results = $wpdb->get_results($query);
      wp_cache_set($key, $results, 'posts');
    }
    $arc_w_last = '';
    if ($results) {
      $after = $parsed_args['after'];
      foreach ((array) $results as $result) {
        if ($result->week != $arc_w_last) {
          $arc_year       = $result->yr;
          $arc_w_last     = $result->week;
          $arc_week       = get_weekstartend($result->yyyymmdd, get_option('start_of_week'));
          $arc_week_start = date_i18n(get_option('date_format'), $arc_week['start']);
          $arc_week_end   = date_i18n(get_option('date_format'), $arc_week['end']);
          $url            = add_query_arg(
            array(
              'm' => $arc_year,
              'w' => $result->week,
            ),
            home_url('/')
          );
          if ('post' !== $parsed_args['post_type']) {
            $url = add_query_arg('post_type', $parsed_args['post_type'], $url);
          }
          $text = $arc_week_start . $archive_week_separator . $arc_week_end;
          if ($parsed_args['show_post_count']) {
            $parsed_args['after'] = '&nbsp;(' . $result->posts . ')' . $after;
          }
          $selected = is_archive() && (string) $parsed_args['year'] === $result->yr && (string) $parsed_args['w'] === $result->week;
          $output  .= get_archives_link2($url, $text, $parsed_args['format'], $parsed_args['before'], $parsed_args['after'], $selected);
        }
      }
    }
  } elseif (('postbypost' === $parsed_args['type']) || ('alpha' === $parsed_args['type'])) {
    $orderby = ('alpha' === $parsed_args['type']) ? 'post_title ASC ' : 'post_date DESC, ID DESC ';
    $query   = "SELECT * FROM $wpdb->posts $join $where ORDER BY $orderby $limit";
    $key     = md5($query);
    $key     = "wp_get_archives:$key:$last_changed";
    $results = wp_cache_get($key, 'posts');
    if (!$results) {
      $results = $wpdb->get_results($query);
      wp_cache_set($key, $results, 'posts');
    }
    if ($results) {
      foreach ((array) $results as $result) {
        if ('0000-00-00 00:00:00' !== $result->post_date) {
          $url = get_permalink($result);
          if ($result->post_title) {
            /** This filter is documented in wp-includes/post-template.php */
            $text = strip_tags(apply_filters('the_title', $result->post_title, $result->ID));
          } else {
            $text = $result->ID;
          }
          $selected = get_the_ID() === $result->ID;
          $output  .= get_archives_link2($url, $text, $parsed_args['format'], $parsed_args['before'], $parsed_args['after'], $selected);
        }
      }
    }
  }

  if (
    $parsed_args['echo']
  ) {
    echo $output;
  } else {
    return $output;
  }
}




//元々のfile

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
 * Enqueue scripts and styles.
 */
// function ritsuwa_scripts()
// {
//   wp_enqueue_style('ritsuwa-style', get_stylesheet_uri(), array(), _S_VERSION);
//   wp_style_add_data('ritsuwa-style', 'rtl', 'replace');

//   // wp_enqueue_script('ritsuwa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
//   wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array(), _S_VERSION, true);

//   if (is_singular() && comments_open() && get_option('thread_comments')) {
//     wp_enqueue_script('comment-reply');
//   }
// }
// add_action('wp_enqueue_scripts', 'ritsuwa_scripts');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function ritsuwa_content_width()
// {
//   $GLOBALS['content_width'] = apply_filters('ritsuwa_content_width', 640);
// }
// add_action('after_setup_theme', 'ritsuwa_content_width', 0);



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function ritsuwa_widgets_init()
// {
//   register_sidebar(
//     array(
//       'name'          => esc_html__('Sidebar', 'ritsuwa'),
//       'id'            => 'sidebar-1',
//       'description'   => esc_html__('Add widgets here.', 'ritsuwa'),
//       'before_widget' => '<section id="%1$s" class="widget %2$s">',
//       'after_widget'  => '</section>',
//       'before_title'  => '<h2 class="widget-title">',
//       'after_title'   => '</h2>',
//     )
//   );
// }
// add_action('widgets_init', 'ritsuwa_widgets_init');
/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
// require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if (defined('JETPACK__VERSION')) {
  // require get_template_directory() . '/inc/jetpack.php';
// }
