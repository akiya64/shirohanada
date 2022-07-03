<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.9
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php get_template_part( 'components/content', 'header' ); ?>

	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div><!--end entry-content-->

	<?php get_template_part( 'components/content', 'footer' ); ?>

	<?php
		/* show comment form in entry-content column, only single.php */
		if ( is_single() ) :
	?>

	<div class="entry-margin"></div>

	<div class="entry-comments">
		<?php comments_template(); ?>
	</div>

		<?php endif; ?>

</article>
