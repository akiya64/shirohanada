<?php
/**
 * The template part for paginate nav
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

	/* Build pagination by WordPress embedded method. */
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'mid_size' => 3,
		'total' => $wp_query->max_num_pages,
		'prev_next' => False
		) );

	/* Title is current category name or year.month */
	if( is_category() ):
		$page_title = single_cat_title('', False ).' ';
	elseif( is_archive() ):
		$page_title = 'Archive ' . the_date( 'Y.m', '','', False ) . ' ';
	else:
		$page_title = 'Posts ';
	endif;
?>

<nav class="pagenation text-centering">
	<?php echo $page_title . $paginate_links; ?>
</nav>
