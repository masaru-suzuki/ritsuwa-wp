<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

?>

<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo home_url('/'); ?>">
      <span itemprop="name">ホーム</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>

  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="<?php echo get_page_link(18); ?>">
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
