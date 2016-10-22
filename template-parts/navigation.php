<?php
/**
 * Navigation part display links for move posts
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */
?>

<?php
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
	elseif( is_tag() ):
		$page_title = single_tag_title('', False ).' ';
	else:
		$page_title = 'Archive ' . the_date( 'Y.m', '','', False ) . ' ';
	endif;
?>

<?php if( !is_null( $paginate_links ) ): ?>

<p class="pagenation">
	<?php echo $page_title . $paginate_links; ?>
</p>

<?php endif; ?>

<?php
/**
 * Navigation part display links for move posts
 */

/* calculate date, build link url */
if(is_month()){
	//Previous - Next Month Nav//
	$before_post_month = new DateTime(get_the_time('Y-m')." -1 month");
	$before_month_link = get_month_link($before_post_month->format('Y'), $before_post_month->format('m'));

	$after_post_month = new DateTime((get_the_time('Y-m')." +1 month"));
	$after_month_link = get_month_link($after_post_month->format('Y'), $after_post_month->format('m'));
	
	$now_month = new DateTime();

	$posts_link = '<a href="'.$before_month_link.'"><i class="icon icon-angle-left"></i>'.$before_post_month->format('Y.m').'</a>';
	
	if($after_post_month <= $now_month){
		$posts_link .= '&nbsp;<a href="'.$after_month_link.'">'.$after_post_month->format('Y.m').'<i class="icon icon-angle-right"></i></a>';
		}

}elseif(is_date()){
	//Previous - Next Date Nav//
	$before_post_date = new DateTime(get_the_time('Y-m-d')." -1 day");
	$before_date_link = get_day_link($before_post_date->format('Y'), $before_post_date->format('m'), $before_post_date->format('d'));

	$after_post_date = new DateTime((get_the_time('Y-m-d')." +1 day"));
	$after_date_link = get_day_link($after_post_date->format('Y'), $after_post_date->format('m'), $after_post_date->format('d'));
	
	$now_date = new DateTime();

	$posts_link = '<a href="'.$before_date_link.'"><i class="icon icon-angle-left"></i>'.$before_post_date->format('Y.m.d').'</a>';
	
	if($after_post_date < $now_date){
		$posts_link .= '&nbsp;<a href="'.$after_date_link.'">'.$after_post_date->format('Y.m.d').'<i class="icon icon-angle-right"></i></a>';
		}
}

/* Put link tag */
if( is_single() ):

	 previous_post_link('<p>Next:%link<br>');
	 next_post_link('Previous:%link</p>');

elseif( isset( $posts_link ) ):

    echo '<p class="movedate">';
    echo $posts_link;
    echo '</p>';

endif;

?>

