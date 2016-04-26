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
		// Display posts
		// Start the loop.:
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content' );
		}

		get_template_part( 'nav', 'pagenate' );
		get_template_part( 'nav', 'posts' );
	?>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
