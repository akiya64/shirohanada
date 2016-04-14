<?php get_header(); ?>

<div class="main-contents">

<div class="articles">

	<?php get_template_part( 'content' ); ?>

	<div class="paging">
		<p><?php previous_post_link('Next:%link'); ?></p>
		<p><?php next_post_link('Previous:%link'); ?></p>
	</div>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
