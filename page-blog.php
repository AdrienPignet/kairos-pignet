<?php
/*
Template Name: Blog
*/
?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <div class="bg-title blog-title">
   <h2>Blog</h2>
 </div>
 <div class="blog-bg">
   <div class="row blog-items">
     <?php if ( have_posts() ) : ?>
       <?php /* Start the Loop */ ?>
       <?php while ( have_posts() ) : the_post(); ?>
         <?php get_template_part( 'template-parts/blog-mini', get_post_format() ); ?>
       <?php endwhile; ?>
       <?php else : ?>
         <?php get_template_part( 'template-parts/content', 'none' ); ?>
       <?php endif; // End have_posts() check. ?>
       <?php /* Display navigation to next/previous pages when applicable */ ?>
   </div>

 <?php get_footer();
