<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Front Page Widget',
		'id' => 'front-widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => 'Side Bar Menu',
		'id' => 'sidebar-widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * CustomMenu for Front Page
 *
 */
function top_menu() {
  register_nav_menu('top-menu',__( 'Contents Link' ));
}
add_action( 'init', 'top_menu' );

/**
 * remove header
 *
 */

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

/**
 * get oldest post date for copy right
 * ref http://nelog.jp/copyrights
 **/
function get_first_post_year(){
	$year = null;

	query_posts('posts_per_page=1&order=ASC');
  
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		$year = intval(get_the_time('Y'));//Å‰‚Ì“Še‚Ì”N‚ðŽæ“¾
	endwhile; endif;
	wp_reset_query();
	return $year;
}

?>
