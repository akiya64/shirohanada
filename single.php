<?php get_header(); ?>

<div class="main-contents">

<div class="articles">

	<?php
		// Start the loop.:
		while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content' ); ?>

	<?php endwhile; ?>

	<nav class="move-post">
		<p><?php previous_post_link('Next:%link'); ?></p>
		<p><?php next_post_link('Previous:%link'); ?></p>
	</nav>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
