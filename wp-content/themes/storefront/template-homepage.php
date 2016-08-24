<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 */
			 do_action( 'homepage' ); 
			
			#else {
				echo '<div class="dd-description"><p>「展銷場」集商店、展覽空間、分銷與調研諮詢服務中心於一身，可謂城中九龍區的奇葩。</p><p>Display Distribute is a shop, exhibition space, distribution service and thematic inquiry in Kowloon, Hong Kong.</p><p>新網站即將上線， “裝修中”给您帶來的不便，敬請諒解。</p><p>Please pardon the inconvenience, new website coming soon!</p><p><a href="https://www.facebook.com/displaydistribute/" target="_blank">FB</a> / <a href="mailto:info@displaydistribute.com">&#9993;</a></p></div>';
			#}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
