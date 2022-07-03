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

</main><!--end article-area-->

<?php get_footer(); ?>
