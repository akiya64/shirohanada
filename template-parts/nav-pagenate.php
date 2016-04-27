<nav class="pagenation text-centering">
	<p>
		<?php
			//Current CatName or Date //
			if( is_category() ) {
				echo single_cat_title("", False )." ";
			}else{
				echo 'Archive ' . get_the_time('Y') . '.' . get_the_time('m');
			}

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


