<?php get_header(); ?>

<?php
	$page = get_page_by_title('About');
	$catlist_args = array(
		'title_li' => '',
		'echo' => '1',
		'number' => '5'
	);
?>

<div class="top-flex-container">
<div class="top-banner-container">
<img class="top-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/top_banner.jpg">
</div>
<header class="top-page-header">
	<h1 class="site-name"><?php bloginfo('name') ; ?></h1>
	<p class="site-description"><?php bloginfo('description') ; ?></p>
</header>

<div class="dropdown-part">

<h2 class="contents-link-title">Contents</h2>

<nav class="root-contents" role="menu">
	<ul class="content-link">
		<!--Nav height is 7.6em / 2column
			Contents List first child is "About" if is exist -->
		<li><a href="<?php echo get_page_link($page->ID); ?>">About</a></li>
		
		<!--Put Category List first 4 -->
		<?php wp_list_categories($catlist_args); ?>

		<!--List Lastchild is Archive-->
		<li><a href="<?php echo get_month_link('', ''); ?>">Archive</a></li>

	</ul>

</nav>

<?php if ( is_active_sidebar( 'front-widgets' ) ) : ?>

<div id="front-widgets" class="front widget-area" role="complementary">

	<?php dynamic_sidebar( 'front-widgets' ); ?>

</div><!-- #front-page-widgets -->

<?php endif; ?>

<?php get_footer(); ?>
