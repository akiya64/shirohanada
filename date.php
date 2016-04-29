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

<?php
		/* default is year.month. Switch year or day */
		if ( is_day() ) :
			$archive_date = get_the_date( 'Y.m.d' );
		elseif ( is_year() ) :
			$archive_date = get_the_date( 'Y' );
		else :
			$archive_date = get_the_date( 'Y.m' );
		endif ;
	?>

	<h2 class="page-title">Archives <?php echo $archive_date; ?></h2>

	<?php
		/* Set query */
		$arg = array(
			'order' => 'ASC',
			'date_query' => array(
				array(
					'year' => get_the_date('Y'),
					'month' => get_the_date('m')
					),
				),
			);
		$date_query = new WP_Query($arg);

		/* Display posts
			Start the loop.*/
		while ( $date_query->have_posts() ) {
			$date_query->the_post();
			get_template_part( 'template-parts/content' );
		}

		get_template_part( 'template-parts/nav', 'pagenate' );
		get_template_part( 'template-parts/nav', 'posts' );
	?>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
