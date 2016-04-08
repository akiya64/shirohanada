<?php
/**
 * The template part for comment
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since
 */
?>
<?php if(have_comments()): ?>
<h3 class="comments-header">Comments</h3>
<ul class="no-marker">
	<?php wp_list_comments(array('avatar_size' => 52)); ?>
</ul>
<?php endif; ?>

<?php comment_form(); ?>
