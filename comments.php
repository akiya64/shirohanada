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
	<h3 class="comments-list-header">Comments</h3>
	<ul class="comments-list _no-marker">
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 52,
			)
		);
		?>
	</ul>
<?php endif; ?>

<?php comment_form(); ?>
