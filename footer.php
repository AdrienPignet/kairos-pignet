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

		</section>
		<div id="footer-container">
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
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript">
$(document).ready(function () {

"use strict";

$('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
//Checks if li has sub (ul) and adds class for toggle icon - just an UI


$('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
//Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

$(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

//Adds menu-mobile class (for mobile toggle menu) before the normal menu
//Mobile menu is hidden if width is more then 959px, but normal menu is displayed
//Normal menu is hidden if width is below 959px, and jquery adds mobile menu
//Done this way so it can be used with wordpress without any trouble

$(".menu > ul > li").hover(function (e) {
	if ($(window).width() > 943) {
		$(this).children("ul").stop(true, false).fadeToggle(150);
		e.preventDefault();
	}
});
//If width is more than 943px dropdowns are displayed on hover

$(".menu > ul > li").click(function () {
	if ($(window).width() <= 943) {
		$(this).children("ul").fadeToggle(150);
	}
});
//If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

$(".menu-mobile").click(function (e) {
	$(".menu > ul").toggleClass('show-on-mobile');
	e.preventDefault();
});
//when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});
</script>
</body>
</html>
