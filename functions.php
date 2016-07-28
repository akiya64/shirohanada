<?php
/**
 * Shirohanada functions and definitions
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

/**
 * Register enqueue stylesheet and WebFont
 *
 * @since Shirohanada 0.9.1
 */
function shirohanada_enqueue_styles() {

	wp_enqueue_style( 'shirohanada_style', get_stylesheet_uri() );
	wp_enqueue_style( 'ubuntu-font', 'https://fonts.googleapis.com/css?family=Ubuntu' );
	
}

add_action( 'wp_enqueue_scripts', 'shirohanada_enqueue_styles' );

/**
 * Register our sidebars and widgetized areas.
 *
 * @since Shirohanada 0.8
 */
function shirohanada_widgets_init() {

	register_sidebar( array(
		'name' => 'Side Bar Menu',
		'id' => 'sidebar-widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Front Page Widget',
		'id' => 'front-widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

}

add_action( 'widgets_init', 'shirohanada_widgets_init' );

/**
 * CustomMenu for Front Page
 *
 * @since Shirohanada 0.9
 */
function register_root_menu() {
	register_nav_menu( 'root-menu','Front Page Menu' );
}

add_action( 'after_setup_theme', 'register_root_menu' );

/**
 * Custom header for Front Page
 *
 * @since Shirohanada 0.9
 */
register_default_headers( array(

		/*
         * Add 3images to default header image.
		 */

		'cherry_blossom' => array(
			'url' => get_template_directory_uri().'/images/fukuju_bridge.jpg',
			'thumbnail_url' => get_template_directory_uri().'/images/thumb_fukuju_bridge.jpg',
			/* translators: header image description */
			'description' => 'cherryblossom',
		),
		'coast' => array(
			'url' => get_template_directory_uri().'/images/ochi_ishi.jpg',
			'thumbnail_url' => get_template_directory_uri().'/images/thumb_ochi_ishi.jpg',
			/* translators: header image description */
			'description' => 'coast',
		),
		'tram_station' => array(
			'url' => get_template_directory_uri().'/images/ujina_station.jpg',
			'thumbnail_url' => get_template_directory_uri().'/images/thumb_ujina_station.jpg',
			/* translators: header image description */
			'description' => 'station',
		),
	)
);

$custom_header_args = array(
	'width' => 700,
	'flex-width' => true,
	'height' => 700,
	'flex-height' => true,
	'upload' => true,
	'random-default' => true,
);

add_theme_support( 'custom-header', $custom_header_args );

/**
 * Remove header ,not using Shirohanada
 *
 * @since Shirohanada 0.8
 */

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

/**
 * Registers an editor stylesheet for the theme.
 *
 * @since Shirohanada 0.9
 */
function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/**
 * Get oldest post date for copy right
 * ref http://nelog.jp/copyrights
 *
 * @since Shirohanada 0.9
 * @return integer the year of oldest post
 */
function get_first_post_year() {
	$year = null;

	query_posts( 'posts_per_page=1&order=ASC' );

	if ( have_posts() ) : while ( have_posts() ) : the_post();
			$year = intval( get_the_time( 'Y' ) );
	endwhile;
endif;
	wp_reset_query();
	return $year;
}

/**
 * Category icon selector
 *
 * @since Shirohanada 0.9
 * @param string|null $category_slug declaration in WordPress dashbord.
 */
function select_category_icon( $category_slug = 'uncategorized' ) {
	switch ( $category_slug ) :
		case 'photo':
			$icon_name = 'photo';
			break;
		case 'illust':
			$icon_name = 'illust';
			break;
		case 'develop':
			$icon_name = 'terminal';
			break;
		case 'tweets':
			$icon_name = 'quill';
			break;
		default:
			$icon_name = 'folder';
	endswitch;

	echo $icon_name;
}

?>
