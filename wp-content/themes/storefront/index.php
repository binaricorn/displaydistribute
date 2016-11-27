<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="dd-courier-table">
				<ul>
					<li><h4>靜件號碼<br>Dispatch No.</h4></li>
					<li><h4>內容<br>Contents</h4></li>
					<li><h4>出發點<br>Start Point</h4></li>
					<li><h4>到達點<br>End Point</h4></li>
					<li><h4>數量/體量<br>Weight/Quantity</h4></li>
					<li><h4>慢遞人員<br>Courier</h4>	</li>
					<li><h4>物流情況<br>Shipping Status</h4>	</li>
					<li><h4>附注<br>Notation</h4></li>
					<li><h4>媒體記錄<br>Tracking</h4></li>
					<div class="clear"></div>
				</ul>
			</div>

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>
		<h2 style="text-align: center; padding-top: 1em;">成為展銷場的「後勤」慢遞人員 TO BECOME A COURIER:</h2>
		<?php echo do_shortcode("[huge_it_forms id='3']"); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
#do_action( 'storefront_sidebar' );
get_footer();
