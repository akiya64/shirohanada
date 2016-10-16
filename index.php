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

<div class="article-area">

	<?php echo wp_kses_post( $current_page_title ); ?>

	<?php
	/* Display posts Start the loop.*/
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
	endwhile;
	?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'template-parts/navigation' ); ?>
	</nav>

</div><!--end article-area-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
