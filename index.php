<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<div class="article-area" role="main" itemprop="mainEntityOfPage">

<?php
if ( is_category() ) :
	$h2_title = single_cat_title( '', false );
elseif ( is_tag() ) :
	$h2_title = single_tag_title( '', false );
elseif ( is_search() ) :
	$h2_title = 'Search Result "' . get_search_query( false );
else :
	/* this case is expected only /blog */
	$h2_title = 'Latest Posts';
endif ;

if ( ! is_single() ) :
	/* Display page title. */
	echo '<h2 class="page-title">' . wp_kses_post( $h2_title ) . '</h2>' ;
endif ;

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
