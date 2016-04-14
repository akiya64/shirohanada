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

	<div class="paging"><p>
		<?php
			$next = '<i class="icon icon-angle-left"></i>Next';
			$pre = 'Previous<i class="icon icon-angle-right"></i>';
			posts_nav_link(' - ',$next,$pre);
		?>
	</p></div>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
