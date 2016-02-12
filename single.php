<?php get_header(); ?>

<header class="site-header entries" role="banner">

	<a id="menu-button" class="button show-menu" href="#sidemenu"><i class="icon icon-ellipsis-v"></i></a>
	<p class="site-description"><?php bloginfo('description') ; ?></p>

	<h1 class="site-name"><a href="<?php bloginfo('url'); ?>" class="link-top"><?php bloginfo('name') ; ?></a></h1>
</header>

<div class="main-contents">

<div class="articles">

	<?php get_template_part( 'content' ); ?>

	<div class="paging">
		<p><?php previous_post_link('Next:%link'); ?></p>
		<p><?php next_post_link('Previous:%link'); ?></p>
	</div>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
