<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<h2 class="page-title">"<?php echo esc_html( get_search_query( false ) ); ?>" 検索結果</h2>

	<?php
	/* Display posts Start the loop.*/
	while ( have_posts() ) :
		the_post();
		get_template_part( 'components/content' );
	endwhile;
	?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'components/navigation' ); ?>
	</nav>

</div><!--end article-area-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
