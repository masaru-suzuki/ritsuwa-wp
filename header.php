<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ritsuwa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> <?php if (is_single()) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!-- External files -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"> -->
  <!-- Favicon, Thumbnail image -->
  <?php wp_head(); ?>
</head>

<body ontouchstart="" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      <a class="site-header__logo-link" href="<?php echo home_url('/'); ?>">
        <img class="site-header__logo" src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="">
      </a>
      <div class="site-header__nav pc">
        <ul class="nav">
          <li class="nav__item" onclick="location.href='<?php echo home_url('/'); ?>'">ホーム</li>
          <li class="nav__item" onclick="location.href='<?php echo get_page_link(14); ?>'">サービス</li>
          <li class="nav__item" onclick="location.href='<?php echo get_page_link(16); ?>'">施設</li>
          <li class="nav__item" onclick="location.href='<?php echo get_page_link(18); ?>'">お知らせ</li>
          <li class="nav__item--bg">
            <a href="<?php echo get_page_link(2126); ?>" class="bg-blue">
              <i class="far fa-address-card"></i>
              <p>採用情報</p>
            </a>
            <a href="<?php echo get_page_link(2126); ?>" class="bg-darkblue">
              <i class="fas fa-envelope"></i>
              <p>お問い合わせ</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="globalMenuSp pc_none">
        <ul>
          <li class="globalMenuLi"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="globalMenuLi"><a href="<?php echo get_page_link(14); ?>">サービス</a></li>
          <li class="globalMenuLi"><a href="<?php echo get_page_link(16); ?>">施設</a></li>
          <li class="globalMenuLi"><a href="<?php echo get_page_link(18); ?>">お知らせ</a></li>
          <li class="globalMenuLi"><a href="">採用情報</a></li>
          <li class="globalMenuLi"><a href="<?php echo get_page_link(2126); ?>">お問い合わせ</a></li>
        </ul>
      </nav>

    </header><!-- #masthead -->
