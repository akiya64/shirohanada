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
	<div class="article-area">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			<h2 class="page-title">
				<?php the_title(); ?>
			</h2>

			<article id="<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<p class="footer-date _text-alignright"><time pubdate="<?php the_time( 'Y-n-j' ); ?>"><?php the_time( 'Y.n.j' ); ?></time></p>
				<p class="footer-author _text-alignright">Author:<?php the_author();?></p>

			<?php get_template_part( 'template-parts/content', 'articlefooter' ); ?>

		<?php endwhile; ?>

	</div><!--end article-area-->

	<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
