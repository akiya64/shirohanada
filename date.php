<?php
/**
 * The template for displaying date archive
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

get_header(); ?>

<div class="main-contents">

<div class="article-area">

<?php

	/*
     Default is year.month. Switch year or day
         build title and query args
	*/

if ( is_day() ) :
	$title_date_part = get_the_date( 'Y.m.d' );
	$posts_piriod = array(
	array(
		'year' => get_the_date( 'Y' ),
		'month' => get_the_date( 'm' ),
		'day' => get_the_date( 'd' ),
		),
	);

	elseif ( is_year() ) :
		$title_date_part = get_the_date( 'Y' );
		$posts_piriod = array(
			array(
				'year' => get_the_date( 'Y' ),
				),
			);

	else :
		$title_date_part = get_the_date( 'Y.m' );
		$posts_piriod = array(
			array(
				'year' => get_the_date( 'Y' ),
				'month' => get_the_date( 'm' ),
				),
			);

	endif ;
?>

	<h2 class="page-title">Archives <?php echo wp_kses_post( $title_date_part ); ?></h2>

	<?php
	/* Set query */
	$arg = array(
		'order' => 'ASC',
		'date_query' => $posts_piriod,
		'ignore_sticky_posts' => 1,
		);

	$date_query = new WP_Query( $arg );

	/* Start the loop.*/
	while ( $date_query->have_posts() ) {
		$date_query->the_post();
		get_template_part( 'template-parts/content' );
	}

	/* Display page navigation */
	echo '<nav class="move-post _text-centering">';

	if ( is_single() ) :
		get_template_part( 'template-parts/nav', 'move_post' );
	else :
		get_template_part( 'template-parts/nav', 'pagenate' );
		get_template_part( 'template-parts/nav', 'posts' );
	endif ;

	echo '</nav>';

	?>

</div><!--end article-area-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
