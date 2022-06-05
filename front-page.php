<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

get_header(); ?>

<div>

	<img src="<?php header_image(); ?>" alt="header image">

	<header>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</header>


	<div>

		<h2>Contents</h2>

		<nav role="menu">
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

		<div role="complementary">

			<?php dynamic_sidebar( 'front-widgets' ); ?>

		</div><!-- #front-page-widgets -->

		<?php endif; ?>

		<footer>
			<p>
				(c) <?php echo intval( get_first_post_year() ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> / Powered by <a href="http://wordpress.org/"><i></i>WordPress</a>
			</p>
		</footer>
	</div><!--End DropDownPart-->

	</div><!--End Top Flex Container-->

<?php get_footer(); ?>
