<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<div class="front-main">

	<div class="headerimg-box">
		<img src="<?php header_image(); ?>" alt="header image" class="headerimage">
	</div>

	<header class="site-header -front">
		<h1 class="site-name -front"><?php bloginfo( 'name' ); ?></h1>
		<p class="site-description -front"><?php bloginfo( 'description' ); ?></p>
	</header>


	<div class="dropdown-part">

		<h2 class="navmenu-title">Contents</h2>

		<nav class="front-navmenu" role="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'front-page-menu', 'container' => '' ) ); ?>
		</nav>

		<?php if ( is_active_sidebar( 'front-widgets' ) ) : ?>

		<div class="front-widgets" role="complementary">

			<?php dynamic_sidebar( 'front-widgets' ); ?>

		</div><!-- #front-page-widgets -->

		<?php endif; ?>

<?php get_footer(); ?>
