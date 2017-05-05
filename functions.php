<?php
/**
 * Shirohanada functions and definitions
 *
 * @package    WordPress
 * @subpackage Shirohanada
 * @since      Shirohanada 0.8
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
 * Enable post thumnails.
 *
 * @since Shirohanada 0.9.1
 */

add_theme_support( 'post-thumbnails' );

/**
 * Register our sidebars and widgetized areas.
 *
 * @since Shirohanada 0.8
 */
function shirohanada_widgets_init() {

	register_sidebar(
		array(
		'name' => 'Side Bar Widgets',
		'id' => 'sidebar-widgets',
		'before_widget' => '<section id="%1$s" class="wp-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="title">',
		'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
		'name' => 'Front Page Widget',
		'id' => 'front-widgets',
		'before_widget' => '<section id="%1$s" class="wp-widget -front %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="title">',
		'after_title' => '</h2>',
		)
	);

}

add_action( 'widgets_init', 'shirohanada_widgets_init' );

/**
 * CustomMenu for Front Page
 *
 * @since Shirohanada 0.9
 */
function register_front_menu() {
	register_nav_menu( 'front-page-menu', 'Front Page Menu' );
}

add_action( 'after_setup_theme', 'register_front_menu' );

/**
 * Custom header for Front Page
 *
 * @since Shirohanada 0.9
 */
register_default_headers(
	array(

		/*
         * Add 3images to default header image.
    */

		'cherry_blossom' => array(
			'url' => get_template_directory_uri() . '/images/fukuju_bridge.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/thumb_fukuju_bridge.jpg',
			/* translators: header image description */
			'description' => 'cherryblossom',
		),
		'coast' => array(
			'url' => get_template_directory_uri() . '/images/ochi_ishi.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/thumb_ochi_ishi.jpg',
			/* translators: header image description */
			'description' => 'coast',
		),
		'tram_station' => array(
			'url' => get_template_directory_uri() . '/images/ujina_station.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/thumb_ujina_station.jpg',
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
add_editor_style();

/**
 * Get oldest post date for copy right
 * ref http://nelog.jp/copyrights
 *
 * @since  Shirohanada 0.9
 * @return integer the year of oldest post
 */
function get_first_post_year() {
	$year = null;
	$query1 = new WP_Query( 'posts_per_page=1&order=ASC' );

	while ( $query1->have_posts() ) : $query1->the_post();
		$year = intval( get_the_time( 'Y' ) );
	endwhile;

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

	echo esc_html( $icon_name );
}

/**
 * Replaces the excerpt "Read More" text by a link
 *
 * @since shirohanada 0.10.0
 */
function new_excerpt_more() {
	global $post;
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Add switch show excerpt or content.
 *
 * @param array $tag term.php in WordPress core class passes.
 * @since shirohanada 0.10.0
 */
function extra_category_fields( $tag ) {
	$flags = get_option( 'shirohanada_category_flags' );

	if ( isset( $flags ) ) {
		$cid = $tag -> term_id;
		$key = "cat_$cid";
		$is_show_excerpt = get_theme_mod( $key );
	}
?>
	<tr class="form-field">
	<th><label for="extra_text">抜粋を表示</label></th>
	<td>
		<input type="hidden" id="show_excerpt_nonce" name="show_excerpt_nonce" value="<?php echo esc_attr( wp_create_nonce( 'post_excerpt_flag' ) ); ?>">
		<select name="show_excerpt" id="show_excerpt">
	<?php if ( $is_show_excerpt ) : ?>
			<option value="yes" selected>はい</option>
			<option value="no">いいえ</option>
	<?php else : ?>
			<option value="yes">はい</option>
			<option value="no" selected>いいえ</option>
	<?php endif; ?>
		</select>
		<p class="description">カテゴリー表示の時、抜粋を表示します。</p>
	</td>
	</tr>

<?php
}
add_action( 'category_edit_form_fields', 'extra_category_fields' );

/**
 * Save flag show excerpt or content.
 *
 * @param integer $term_id WordPress core passes.
 * @since shirohanada 0.10.0
 */
function save_category_show_excerpt( $term_id ) {
	/* Check Nonce value. */
	if ( isset( $_POST['show_excerpt_nonce'], $_POST['show_excerpt'] ) && ! wp_verify_nonce( sanitize_key( $_POST['show_excerpt_nonce'] ), 'post_excerpt_flag' ) ) {

		exit( 'check-security' );

	}

	/* Check show_excerpt value. */
	if ( ! empty( $_POST['show_excerpt'] ) ) {
		$flag = sanitize_key( $_POST['show_excerpt'] );
	}

	$cat_id = "cat_$term_id";

	if ( 'yes' === $flag ) {
		set_theme_mod( $cat_id, true );
	} else {
		set_theme_mod( $cat_id, false );
	}

}
add_action( 'edited_category', 'save_category_show_excerpt' );
?>
