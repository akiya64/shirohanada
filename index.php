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
	if( is_category() ) :
		$current_page_title = '<h2 class="page-title">'.single_cat_title("", False ).'</h2>';
	elseif ( is_tag() ) :
		$current_page_title = '<h2 class="page-title">'.single_tag_title("", False ).'</h2>' ;
	elseif ( is_single() ) :
		$current_page_title = '' ;
	else :
		/* this case is expected only RecentPost */
		$current_page_title =  '<h2 class="page-title">Latest Posts</h2>';
	endif ;
?>

<div class="main-contents">

<div class="articles">

	<?php echo $current_page_title; ?>

	<?php
		/* Display posts Start the loop.*/
		while ( have_posts() ):
			the_post();
			get_template_part( 'template-parts/content' );
		endwhile;

		get_template_part( 'template-parts/nav', 'pagenate' );
		get_template_part( 'template-parts/nav', 'posts' );
	?>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
