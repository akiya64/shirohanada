<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single() ) : ?>
		<h1 class="entry-title single" itemprop="headline"><?php the_title(); ?></h1>
	<?php else : ?>
		<h1 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php endif; ?>

	<?php get_template_part( 'components/articleheader' ); ?>

	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div><!--end entry-content-->

	<?php get_template_part( 'components/articlefooter' ); ?>

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
