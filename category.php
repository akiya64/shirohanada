<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.10.0
 */

get_header();
?>

<h2 class="page-title"><?php single_cat_title(); ?></h2>

	<?php
		$excerpt_flags = get_option( 'shirohanada_category_flags' );
		$key = 'cat_' . get_query_var( 'cat' );
		$is_show_excerpt = get_theme_mod( $key );

	if ( $is_show_excerpt ) :

		while ( have_posts() ) : the_post();
			get_template_part( 'components/excerpt' );
			endwhile;

	else :

		while ( have_posts() ) : the_post();
			get_template_part( 'components/content' );
			endwhile;

	endif;
	?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'components/navigation' ); ?>
	</nav>

<?php get_footer(); ?>
