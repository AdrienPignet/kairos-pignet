<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="small-12 large-12 columns ariane">
		<?php woocommerce_breadcrumb(); ?>
</div>
<?php if(is_product_category('nouveaute')){ ?>
<div class="bg-title new-watches">
	<h2>Nouveautés</h2>
</div>
<?php }?>
<div class="row">
	<div class="small-12 large-12 columns full-watches" role="main">
		<?php if(is_product_category() && !is_product_category('nouveaute')){ ?>
		<div class="row filtres-produits">
			<h2>Filtres</h2>
			<?php dynamic_sidebar( 'filtres-woo' ); ?>
			<hr class="clear">
		</div>
		<?php }?>

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php //the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
</div>
<?php get_footer();
