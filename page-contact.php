<?php
/*
Template Name: Contact
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

 <div class="bg-title contact-title">
   <h2>Nous contacter</h2>
 </div>
 <div class="contact-bg">
   <div class="row contact-item">
       <div class="small-12 large-2 columns">

       </div>
       <div class="small-12 large-8 large-offset-2 columns">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p><?php _e('erreur de chargement'); ?></p>
        <?php endif; ?>
        </div>
<div class="small-12 large-2 columns">

</div>
   </div>

 <?php get_footer();
