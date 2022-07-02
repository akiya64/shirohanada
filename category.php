<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.10.0
 */

get_header(); ?>

<main class="article-area" role="main" itemprop="mainEntityOfPage">

<h2 class="page-title"><?php single_cat_title(); ?></h2>

	<?php
		$excerpt_flags = get_option( 'shirohanada_category_flags' );
		$key = 'cat_' . get_query_var( 'cat' );
		/* Set query var for components/content-header switch entry-title class. */
		$should_show_content = get_theme_mod( $key );

	if ( $should_show_content ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'components/content' );
			endwhile;

	else :

		while ( have_posts() ) :
			the_post();
			get_template_part( 'components/excerpt' );
			endwhile;

	endif;
	?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'components/navigation' ); ?>
	</nav>

</main><!--end article-area-->

<?php get_footer(); ?>
