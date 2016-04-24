<?php get_header(); ?>

<?php 
	//Current CatName or Date //
	if( is_category() ) {
		$current_page_title = single_cat_title("", False );
	}else{
		$current_page_title = 'Archive ' . get_the_time('Y') . '.' . get_the_time('m');
	}
?>

<div class="main-contents">

<div class="articles">

	<h2 class="page-title">
		<?php echo $current_page_title; ?>
	</h2>

	<?php
		// Start the loop.:
		while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content' ); ?>

	<?php endwhile; ?>

	<nav class="pagenation text-centering">
		<p>
		<?php
			echo "$current_page_title : ";

			//page number//
			global $wp_query;

			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'prev_next' => False
				) );
			?>
		</p>
	</nav>
		
	<nav class="move-posts text-centering">
		<?php if(is_month()){
			//Previous - Next Month Nav//
			$before_post_month = new DateTime(get_the_time('Y-m')." -1 month");
			$before_month_link = get_month_link($before_post_month->format('Y'), $before_post_month->format('m'));

			$after_post_month = new DateTime((get_the_time('Y-m')." +1 month"));
			$after_month_link = get_month_link($after_post_month->format('Y'), $after_post_month->format('m'));
			
			$now_month = new DateTime();
			echo '<a href="'.$before_month_link.'"><i class="icon icon-angle-left"></i>'.$before_post_month->format('Y.m').'</a>';
			
			if($after_post_month <= $now_month){
				echo '<a href="'.$after_month_link.'">'.$after_post_month->format('Y.m').'<i class="icon icon-angle-right"></i></a>';
				}

		}elseif(is_date()){
			//Previous - Next Date Nav//
			$before_post_date = new DateTime(get_the_time('Y-m-d')." -1 day");
			$before_date_link = get_day_link($before_post_date->format('Y'), $before_post_date->format('m'), $before_post_date->format('d'));

			$after_post_date = new DateTime((get_the_time('Y-m-d')." +1 day"));
			$after_date_link = get_day_link($after_post_date->format('Y'), $after_post_date->format('m'), $after_post_date->format('d'));
			
			$now_date = new DateTime();
			echo '<a href="'.$before_date_link.'"><i class="icon icon-angle-left"></i>'.$before_post_date->format('Y.m.d').'</a>';
			
			if($after_post_date < $now_date){
				echo '<a href="'.$after_date_link.'">'.$after_post_date->format('Y.m.d').'<i class="icon icon-angle-right"></i></a>';
				}
		
			}else{
				//show move recent entries ,in category page
				echo '<a href="'.get_month_link('', '').'">Recent Posts</a>';
			}
		?>
	</nav>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
