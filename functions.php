<?php
/**
 * Shirohanada functions and definitions
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

/**
 * Replaces the excerpt "Read More" text by a link
 */

function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">[...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * add switch show excerpt or allcontent
 */

add_action ( 'edit_category_form_fields', 'extra_category_fields');
function extra_category_fields( $tag ) {
    $tid = $tag->term_id;
    $is_show_excerpt = get_option( "cat_$tid_show_excerpt");
?>
<tr class="form-field">
    <th><label for="extra_text">抜粋を表示</label></th>
    <td>
        <select name="show_excerpt" id="show_excerpt">
	<?php if($is_show_excerpt): ?>
	        <option value="yes" selected>はい</option>
        	<option value="no">いいえ</option>
	<?php else: ?>
	        <option value="yes">はい</option>
        	<option value="no" selected>いいえ</option>
	<?php endif; ?>
    	</select>
    <p class="description">カテゴリーページの時、抜粋を表示します。</td>
</tr>

<?php
}

/**
 * store flag show excerpt or allcontent
 */
add_action ( 'edited_term', 'save_category_show_excerpt');
function save_category_show_excerpt( $term_id ) {
    if ( isset( $_POST['show_excerpt'] ) ) {
       $tid = $term_id;
       $posted = $_POST['show_excerpt'];
	if($posted =="yes"){
		$is_show_excerpt = true;
		}

       update_option( "cat_$tid_show_excerpt", $is_show_excerpt );
    }
}

?>