<?php
/**
 * The template part for displaing comments and commnets form
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */
?>

<?php if ( have_comments() ) : ?>
	<h3 class="comments-header">Comments</h3>
	<ul class="no-marker">
		<?php wp_list_comments( array( 'avatar_size' => 52 ) ); ?>
	</ul>
<?php endif; ?>

<?php comment_form(); ?>
