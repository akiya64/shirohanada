<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.10.0
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?> >

	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<?php get_template_part( 'components/articleheader' ); ?>

	
	<?php if ( has_post_thumbnail() ) : ?>

		<div class='entry-excerpt _with-thumbnail'>
			<?php the_excerpt() . '  '; ?><a href="<?php the_permalink(); ?>">...続きを読む</a>
		</div><!--end entry-content-->
		<div class="excerpt-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>

	<?php else : ?>

		<div class='entry-excerpt'>
			<?php the_excerpt() . '  ' ; ?><a href="<?php the_permalink(); ?>">...続きを読む</a>
		</div><!--end entry-content-->

	<?php endif ?>

</article>
