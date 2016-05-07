<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<div class="main-contents">
	<div class="articles">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			<h2 class="page-title">
				<?php the_title(); ?>
			</h2>

			<article id="<?php the_ID(); ?>" class="page">

			<div class="page-content">
				<?php the_content(); ?>
			</div>

			<p class="page-content-footer"><time pubdate="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time></p>
			<p class="page-content-footer">Author:<?php the_author();?></p>

			<?php get_template_part( 'template-parts/content', 'article_footer' ); ?>

		<?php endwhile; ?>

	</div><!--end articles-->

	<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
