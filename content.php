<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage
 * @since
 */
?>

	<article id="<?php the_ID(); ?>">

		<?php if(is_single()): ?>
			<h1 class="entry-title single"><?php the_title();?></h1>
		<?php else: ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
		<?php endif; ?>

		<header class="entry-header">
			<p class="entry-date"><i class="icon icon-time"></i><a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>"><time pubdate="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time></a></p>
			<p><i class="icon icon-folder"></i><?php the_category(' '); ?></a></p>
			<p><?php the_tags('<i class="icon icon-tag"></i>', ',' ,''); ?></p>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!--end entry-content-->

		<div class="entry-margin"></div>
		<div class="c-button-gotop">
			<a href="#top" class="gotop" title="Return Page Top"><i class="icon icon-eject"></i></a>
		</div>
		
		<div class="share-links">
			<?php $encoded_url = urlencode(get_permalink());
			  $share_text = get_the_title(); ?>
			<a class="share-button" href="<?php the_permalink(); ?>" title="この投稿にコメントする。"><i class="icon icon-comment"></i></a>
			<a class="share-button" href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url.'&text='.$share_text.'&via=K_akiya'; ?>" title="share Twitter"><i class="icon icon-share-twitter"></i></a>
			<a class="share-button" href="https://facebook.com/sharer.php?u=<?php echo $encoded_url.'&amp;t='.$share_text; ?>" title="share Facebook"  rel="nofollow" target="_blank"><i class="icon icon-share-facebook"></i></a>
			<a class="share-button" href="https://plus.google.com/share?url=<?php echo $encoded_url; ?>" title="+1 GooglePlus"><i class="icon icon-share-google-plus"></i></a>
			<a class="share-button" href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" title="Get Pocket"><i class="icon icon-get-pocket"></i></a>
		</div>
	
	<?php if(is_single()): ?>
		<div class="entry-margin"></div>
		<div class="comments">
			<?php comments_template();?>
		</div>
	<?php endif; ?>

	</article>


