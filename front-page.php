<?php get_header(); ?>

<?php
	$page = get_page_by_title('About');
	$catlist_args = array(
		'title_li' => '',
		'echo' => '1',
		'number' => '5'
	);
?>

	<div class="dropdown-part">

		<h2 class="contents-link-title">Contents</h2>

		<nav class="root-contents" role="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'root-menu' , 'container' => '' ) ); ?>
		</nav>

		<?php if ( is_active_sidebar( 'front-widgets' ) ) : ?>

		<div id="front-widgets" class="front widget-area" role="complementary">

			<?php dynamic_sidebar( 'front-widgets' ); ?>

		</div><!-- #front-page-widgets -->

		<?php endif; ?>

<?php get_footer(); ?>
