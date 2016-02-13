<?php get_header(); ?>

<header class="site-header entries" role="banner">

	<a id="menu-button" class="button show-menu" href="#sidemenu"><i class="icon icon-ellipsis-v"></i></a>
	<p class="site-description"><?php bloginfo('description') ; ?></p>

	<h1 class="site-name"><a href="<?php bloginfo('url'); ?>" class="link-top"><?php bloginfo('name') ; ?></a></h1>
</header>

<div class="main-contents">

<div class="articles">

	<h2 class="page-title">
		<?php if( is_category() ) {
				single_cat_title( 'Category:', true );
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
