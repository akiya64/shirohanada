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

	<?php if(is_single()): ?>
		<h1 class="entry-title single"><?php the_title();?></h1>
	<?php else: ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
	<?php endif; ?>

	<header class="entry-header">
		<p class="entry-date"><i class="icon icon-time"></i><a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>"><time pubdate="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time></a></p>
		<p><i class="icon icon-<?php select_category_icon(get_the_category()[0]->slug); ?>"></i><?php the_category(' '); ?></a></p>
		<?php the_tags('<p><i class="icon icon-tag"></i>', ',' ,'</p>'); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!--end entry-content-->

	<?php get_template_part( 'template-parts/content', 'article_footer' ); ?>

	<?php
		/* show comment form in entry-content column, only single.php */
		if(is_single()):
	?>
		<div class="entry-margin"></div>
		<div class="comments">
			<?php comments_template();?>
		</div>
	<?php endif; ?>

</article>
