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

<main id="primary" class="site-main">

  <?php
  $year = get_query_var('year');
  // echo $year;
  ?>
  <h1><?php echo $year; ?> 年だ</h1>
  <?php if (have_posts()) : ?>


  <?php
    /* Start the Loop */
    while (have_posts()) :
      the_post();

      /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
      get_template_part('template-parts/content', get_post_type());

    endwhile;

  // the_posts_navigation();

  else :

  // get_template_part('template-parts/content', 'none');

  endif;
  ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
