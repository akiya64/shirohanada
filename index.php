<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

get_header(); ?>

<main class="article-area" role="main" itemprop="mainEntityOfPage">

	<?php
		$date_prefix = __( 'Archives ', 'shirohanada' );
		if ( is_day() ){
			$h2_title = $date_prefix . get_the_date( 'Y.m.d' );
		} elseif ( is_month () ) {
			$h2_title = $date_prefix . get_the_date( 'Y.m' );
		} elseif ( is_year() ) {
			$h2_title = $date_prefix . get_the_date( 'Y' );
		} elseif ( is_tag() ){
			$h2_title = __( 'Tag ', 'shirohanada' ) . single_tag_title( '', false );
		} elseif ( is_search() ){
			$h2_title = sprintf( __( 'Search Result  "%s"', 'shorohanada'), get_search_query() );
		} else {
			/* this case is expected only /blog */
			$h2_title = __( 'Latest Posts', 'shirohanada' );
		}
	?>

	<h2 class="page-title"><?php echo wp_kses_post( $h2_title ); ?></h2>

	<?php
		if ( have_posts() ) :
			/* Display posts Start the loop.*/
			while ( have_posts() ) :
				the_post();
				if( should_show_content( get_the_category() ) ){
					get_template_part( 'components/content' );
				} else {
					get_template_part( 'components/excerpt' );
				}
			endwhile;
		else :
			/* no posts for Display. */
			get_template_part( 'components/notfound' );
		endif;
	?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'components/navigation' ); ?>
	</nav>

</main><!--end article-area-->

<?php get_footer(); ?>
