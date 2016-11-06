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
					<li><h4>靜件號碼 Dispatch No.</h4></li>
					<li><h4>內容 Contents</h4></li>
					<li><h4>出發點 Start Point</h4></li>
					<li><h4>到達點 End Point</h4></li>
					<li><h4>數量/體量 Weight/	<br>Quantity</h4></li>
					<li><h4>慢遞人員 Courier</h4>	</li>
					<li><h4>物流情況<br>Shipping Status</h4>	</li>
					<li><h4>附注 Notation</h4></li>
					<li><h4>媒體記錄 Tracking</h4></li>
					<div class="clear"></div>
				</ul>
			</div>

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
#do_action( 'storefront_sidebar' );
get_footer();
