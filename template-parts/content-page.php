<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mikrofill
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/layouts/flexible-content'); ?>
</article><!-- #post-<?php the_ID(); ?> -->