<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
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
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'front-page-menu',
					'container' => '',
				)
			);
			?>
		</nav>

		<?php if ( is_active_sidebar( 'front-widgets' ) ) : ?>

		<div class="front-widgets" role="complementary">

			<?php dynamic_sidebar( 'front-widgets' ); ?>

		</div><!-- #front-page-widgets -->

		<?php endif; ?>

		<footer class="site-footer -front">
			<p class="copyright">
				(c) <?php echo intval( get_first_post_year() ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> / Powered by <a href="http://wordpress.org/"><i class="icon icon-wordpress"></i>WordPress</a>
			</p>
		</footer>
	</div><!--End DropDownPart-->

	</div><!--End Top Flex Container-->

<?php get_footer(); ?>
