<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		<!--<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>-->

<footer>
	<div class="row footer-content">
		<div class="small-12 medium-4 large-2 columns">
			<h3>Informations</h3>
			<ul>
				<li><a href="#">à propos de nous</a></li>
				<li><a href="#">Contactez-nous</a></li>
				<li><a href="#">Confidentialité</a></li>
				<li><a href="#">Plan du site</a></li>
				<li><a href="#">Crédits</a></li>
			</ul>
		</div>
		<div class="small-12 medium-4 large-2 columns">
			<h3>Aide et assistance</h3>
			<ul>
				<li><a href="#">Mentions légales</a></li>
				<li><a href="#">Livraison &amp; retours</a></li>
				<li><a href="#">CGV</a></li>
			</ul>
		</div>
		<div class="small-12 medium-4 large-2 columns">
			<h3>Suivez-nous</h3>
			<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Google plus</a></li>
			</ul>
		</div>
		<div class="small-12 medium-6 large-3 columns">
			<h3>Inscription Newsletter</h3>
			<form class="" action="#" method="post">
				<input type="email" name="email" placeholder="Votre email">
				<input type="submit" name="submit" value="ok">
			</form>
		</div>
		<div class="small-12 medium-6 large-3 columns">
			<h3>Payement sécurisé</h3>
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/reassurance/banque-white.png" alt="Payement sécurisé" />
		</div>
	</div>
	<h6>©2016 - Kairos</h6>
</footer>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript">
$('h1').before($('.summary div:eq(1)'));
$('.additional_information_tab a').replaceWith('<a href="#tab-additional_information">Caractéristiques</a>');
$('#woocommerce_product_categories-2 > select.dropdown_product_cat > option:first-of-type').replaceWith('<option value selectect="selected">Marques</option>');
$('#woocommerce_layered_nav-2 > select.dropdown_layered_nav_matiere > option:first-of-type').replaceWith('<option value>Matière</option>');
$('#woocommerce_layered_nav-3 > select.dropdown_layered_nav_mecanisme > option:first-of-type').replaceWith('<option value>Mécanisme</option>');
$('option.level-0').replaceWith('<option class="level-0" value="montres">Toutes les marques</option>');
$('.woocommerce-product-search > input[type="submit"]').replaceWith('<span class="search-submit"><div class="icon-container"><i class="fa fa-search" aria-hidden="true"></i></div><input type="submit" value=""></span>');
$('#post-5 > header > h1.entry-title').replaceWith('<h1 class="entry-title">Votre panier</h1>');
</script>
</body>
</html>
