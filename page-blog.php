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
       <?php
               $args = array(
               'post_type' => 'post',
               );
               $loop = new WP_Query( $args );
               if ( $loop->have_posts() ) {
               while ( $loop->have_posts() ) : $loop->the_post();
               get_template_part( 'template-parts/blog-mini', get_post_format() );

               endwhile;
               } else {
               echo __( 'No products found' );
               }
               wp_reset_query();
       ?>
   </div>

 <?php get_footer();
