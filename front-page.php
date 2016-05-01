<?php get_header(); ?>

<div class="top-flex-container">

	<div class="top-banner-box">
		<img src="<?php header_image(); ?>" alt="top banner" class="top-banner">

		<!--img class="top-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/top_banner.jpg" -->
	</div>

	<header class="top-page-header">
		<h1 class="site-name"><?php bloginfo('name') ; ?></h1>
		<p class="site-description"><?php bloginfo('description') ; ?></p>
	</header>


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
