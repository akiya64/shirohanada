<?php
/**
 * The template part for displaing comments and commnets form
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

?>


<?php if ( have_comments() ) : ?>

	<h3>Comments</h3>

	<ul>
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 52,
			)
		);
		?>
	</ul>

	<?php
	paginate_comments_links(
		array(
			'type' => 'list',
		)
	);
?>

<?php endif; ?>

<?php comment_form(); ?>
