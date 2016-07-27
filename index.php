<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<?php
if ( is_category() ) :
	$current_page_title = '<h2 class="page-title">'.single_cat_title( '', false ).'</h2>';
elseif ( is_tag() ) :
	$current_page_title = '<h2 class="page-title">'.single_tag_title( '', false ).'</h2>' ;
elseif ( is_single() ) :
	$current_page_title = '' ;
else :
	/* this case is expected only RecentPost */
	$current_page_title = '<h2 class="page-title">Latest Posts</h2>';
endif ;
?>

<div class="main-contents">

<div class="articles">

	<?php echo $current_page_title; ?>

	<?php
	/* Display posts Start the loop.*/
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;

	/* Display page navigation */
	echo '<nav class="move-post text-centering">';

	if ( is_single() ) :
		get_template_part( 'template-parts/nav', 'move_post' );
	else :
		get_template_part( 'template-parts/nav', 'pagenate' );
	endif ;

	get_template_part( 'template-parts/nav', 'posts' );

	echo '</nav>';

	?>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
