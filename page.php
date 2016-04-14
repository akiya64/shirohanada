<?php get_header(); ?>

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

	<div class="share-links">
			<?php $encoded_url = urlencode(get_permalink());
			  $share_text = get_the_title(); ?>
			<a class="share-button" href="<?php the_permalink(); ?>" title="この投稿にコメントする。"><i class="icon icon-comment"></i></a>
			<a class="share-button" href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url.'&text='.$share_text.'&via=K_akiya'; ?>" title="share Twitter"><i class="icon icon-share-twitter"></i></a>
			<a class="share-button" href="https://facebook.com/sharer.php?u=<?php echo $encoded_url.'&amp;t='.$share_text; ?>" title="share Facebook"  rel="nofollow" target="_blank"><i class="icon icon-share-facebook"></i></a>
			<a class="share-button" href="https://plus.google.com/share?url=<?php echo $encoded_url; ?>" title="+1 GooglePlus"><i class="icon icon-share-google-plus"></i></a>
			<a class="share-button" href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" title="Get Pocket"><i class="icon icon-get-pocket"></i></a>
	</div>

	</article>

<?php endwhile; ?>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
