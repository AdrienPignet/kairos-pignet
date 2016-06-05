<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

	<div class="quote-bg">
		<div class="row quote">
			<h2>
				"Posséder ce don que les grec appellent le kairos, cette faculté de saisir le moment opportun, ce petit éclair, cette étincelle qui fractionne le temps, c’est être un conteur des occasions."
			</h2>
			<h3>- Muriel Bloch</h3>
		</div>
	</div>
	<div class="bg-title best-sells">
		<h2>Meilleures ventes</h2>
	</div>
	<div id="montreContainer" class="row watches-bsells">
		<?php
			$args = array(
			'post_type' => 'product',
			'stock' => 1,
			'posts_per_page' => 4,
			'meta_key' => 'total_sales',
			'orderby' => 'meta_value_num',
			);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'template-parts/montres-mini', get_post_format() );

			endwhile;
			} else {
			echo __( 'No products found' );
			}
			wp_reset_query();
		?>
	</div>
	<div class="bg-title marques">
		<h2>Nos marques</h2>
	</div>
	<div class="row marques-items">
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/rolex.jpg" alt="Rolex" />
		</div>
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/cartier.jpg" alt="Cartier" />
		</div>
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/chopard.jpg" alt="Chopard" />
		</div>
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/bellandross.jpg" alt="Bell And Ross" />
		</div>
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/omega.jpg" alt="Omega" />
		</div>
		<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-4 large-2 columns">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/marques/chanel.jpg" alt="Chanel" />
		</div>
	</div>
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
	</div>
	<div class="reassurance-bg" role="main">
		<div class="reassurance row">
			<div class="small-6 medium-6 large-3 columns">
				<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="rea-item">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/reassurance/tracabilite.png" alt="Authenticité" />
					<h3>Authenticité des produits</h3>
				</div>
			</div>
			<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-6 large-3 columns">
				<div class="rea-item">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/reassurance/livraison.png" alt="Livraison" />
					<h3>Livraison rapide et sécurisé</h3>
				</div>
			</div>
			<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-6 large-3 columns">
				<div class="rea-item">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/reassurance/banque.png" alt="Payement sécurisé" />
					<h3>Payement sécurisé</h3>
				</div>
			</div>
			<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-6 medium-6 large-3 columns">
				<div class="rea-item">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/reassurance/hotline.png" alt="Service client" />
					<h3>Service client fiable et réactif</h3>
				</div>
			</div>
		</div>
	</div>
	<!--<article>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>-->
<?php get_footer();
