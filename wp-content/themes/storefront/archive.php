<?php
/**
 * lie template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Need to query for this category ID first-->

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

HELLO
			<div class="dd-courier-table">
				<ul>
					<li><h4>靜件號碼 Dispatch No.</h4></li>
					<li><h4>內容 Contents</h4></li>
					<li><h4>出發點 Start Point</h4></li>
					<li><h4>到達點 End Point</h4></li>
					<li><h4>數量/體量 Weight/	<br>Quantity</h4></li>
					<li><h4>慢遞人員 Courier</h4>	</li>
					<li><h4>物流情況 Shipping Status</h4>	</li>
					<li><h4>附注 Notation</h4></li>
					<li><h4>媒體記錄 Tracking</h4></li>
					<div class="clear"></div>
				</ul>
				</div>

			<?php get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
