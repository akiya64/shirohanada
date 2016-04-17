<?php get_header(); ?>

<div class="main-contents">

<div class="articles">

	<h2 class="page-title">
		<?php if( is_category() ) {
				single_cat_title( '', true );
			}else{
				echo 'Archive ' . get_the_time('Y') . '.' . get_the_time('m');
			}
		?>
	</h2>

	<?php get_template_part( 'content' ); ?>

	<nav class="move-posts">
		<p>
			<?php posts_nav_link(' - ', '<i class="icon icon-angle-left"></i>Prev', 'Next<i class="icon icon-angle-right"></i>' ); ?>
		</p>

		<p class="move-date">
			<?php if(is_month()){
				//Previous - Next Month Nav//
				$before_post_month = strtotime(get_the_time('Y-m')." -1 month");
				$before_month = array (
					"year" => date('Y', $before_post_month),
					"month" => date('m', $before_post_month),
				);
				$before_month_link = get_month_link($before_month['year'], $before_month['month']);
				$after_post_month = strtotime(get_the_time('Y-m')." +1 month");
				$after_month = array (
					"year" => date('Y', $after_post_month),
					"month" => date('m', $after_post_month),
				);
				$after_month_link = get_month_link($after_month['year'], $after_month['month']);
				echo '<a href="'.$before_month_link.'"><i class="icon icon-angle-left"></i>Older '.date('Y.m', $before_post_month).'</a>';
				echo '<a href="'.$after_month_link.'">'.date('Y.m', $after_post_month).' Newer<i class="icon icon-angle-right"></i></a>';
				
			}elseif(is_date()){
				//Previous - Next Month Nav
				$before_post_day = strtotime(get_the_time('Y-m-d')." -1 day");
				$before_day = array (
					"year" => date('Y', $before_post_day),
					"month" => date('m', $before_post_day),
					"day" => date('d', $before_post_day),
				);
				$before_day_link = get_day_link($before_day['year'], $before_day['month'], $before_day['day']);
				$after_post_day = strtotime(get_the_time('Y-m-d')." +1 day");
				$after_day = array (
					"year" => date('Y', $after_post_day),
					"month" => date('m', $after_post_day),
					"day" => date('d', $after_post_day),
				);
				$after_day_link = get_day_link($after_day['year'], $after_day['month'], $after_day['day']);
				echo '<a href="'.$before_day_link.'" class="previous-day"><i class="icon icon-angle-left"></i>'.date('Y.m.d', $before_post_day).'</a>';
				echo '<a href="'.$after_day_link.'" class="next-day">'.date('Y.m.d', $after_post_day).'<i class="icon icon-angle-right"></i></a>';
			}else{
				echo '<a href="'.get_month_link('', '').'">Recent Posts</a>';
			}
			?>
		</p>

	</nav>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
