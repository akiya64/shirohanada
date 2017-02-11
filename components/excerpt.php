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

	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

	<?php get_template_part( 'components/articleheader' ); ?>

	<div class='entry-content'>
		<?php the_excerpt(); ?>
	</div><!--end entry-content-->

</article>
