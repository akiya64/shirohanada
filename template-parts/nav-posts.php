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
if(is_month()){
	//Previous - Next Month Nav//
	$before_post_month = new DateTime(get_the_time('Y-m')." -1 month");
	$before_month_link = get_month_link($before_post_month->format('Y'), $before_post_month->format('m'));

	$after_post_month = new DateTime((get_the_time('Y-m')." +1 month"));
	$after_month_link = get_month_link($after_post_month->format('Y'), $after_post_month->format('m'));
	
	$now_month = new DateTime();

	$posts_link = '<a href="'.$before_month_link.'"><i class="icon icon-angle-left"></i>'.$before_post_month->format('Y.m').'</a>';
	
	if($after_post_month <= $now_month){
		$posts_link .= '<a href="'.$after_month_link.'">'.$after_post_month->format('Y.m').'<i class="icon icon-angle-right"></i></a>';
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
		$posts_link .= '<a href="'.$after_date_link.'">'.$after_post_date->format('Y.m.d').'<i class="icon icon-angle-right"></i></a>';
		}
}else{
	/* show Link last post date archive */
	$posts_link = '<a href="'.get_month_link(get_the_time( 'Y' ), get_the_time( 'm' )).'">'.'Posts '.the_date( 'Y.m','','',False ).'</a>';
	}	
?>

<nav class="move-posts text-centering">
	<?php echo $posts_link; ?>
</nav>
