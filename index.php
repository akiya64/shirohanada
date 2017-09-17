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
	$current_page_title = '<h2 class="page-title">' . single_cat_title( '', false ) . '</h2>';
elseif ( is_tag() ) :
	$current_page_title = '<h2 class="page-title">' . single_tag_title( '', false ) . '</h2>' ;
elseif ( is_search() ) :
	$current_page_title = '<h2 class="page-title">Search Result "' . get_search_query( false ) . '"</h2>' ;
elseif ( is_single() ) :
	$current_page_title = '' ;
else :
	/* this case is expected only /blog */
	$current_page_title = '<h2 class="page-title">Latest Posts</h2>';
endif ;

/* Display page title. */
echo wp_kses_post( $current_page_title );

if ( have_posts() ) :
	/* Display posts Start the loop.*/
	while ( have_posts() ) :
		the_post();
		get_template_part( 'components/content' );
	endwhile;
else :
	/* no posts for Display. */
	get_template_part( 'components/notfound' );
endif;

?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'components/navigation' ); ?>
	</nav>

<?php get_footer(); ?>
