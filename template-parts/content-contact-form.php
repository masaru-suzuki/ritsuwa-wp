<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ritsuwa
 */

?>

<!-- contact-form -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo do_shortcode('[mwform_formkey key="2145"]'); ?>
<?php endwhile;
endif; ?>
