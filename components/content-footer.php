<?php
/**
 * The template part for articlefooter goto top link and sharebutton
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.9
 */

	$encoded_url = rawurlencode( get_permalink() );
	$share_text = rawurlencode( get_the_title() . ' | Autumnsky' );

	/* Twitter Via Switch */
	$twitter_username = get_the_author_meta( 'twitter' );
if ( ! empty( $twitter_username ) ) {
	$twitter_share_url = "https://twitter.com/intent/tweet?url=$encoded_url&text=$share_text&via=$twitter_username";
} else {
	$twitter_share_url = "https://twitter.com/intent/tweet?url=$encoded_url&text=$share_text";
}

	$share_url = array(
		'twitter' => $twitter_share_url,
		'facebook' => "https://facebook.com/sharer.php?u=$encoded_url&amp;t=$share_text",
		'pocket' => 'https://getpocket.com/edit?url=' . get_permalink(),
	);
?>

				<?php if ( ! is_page() ) : ?>
					<div></div>
				<?php endif; ?>

				<div>
					<a href="#<?php the_ID(); ?>" title="Return This Post Top"><i></i></a>
				</div>

				<div>
					<?php if ( comments_open() ) : ?>
						<a href="<?php the_permalink(); ?>#reply-title" title="Comment this post"><i></i></a>
					<?php endif; ?>
					<a href="<?php echo esc_url( $share_url['twitter'] ); ?>" title="share Twitter" target="_blank"><i></i></a>
					<a href="<?php echo esc_url( $share_url['facebook'] ); ?>" title="share Facebook" rel="nofollow" target="_blank"><i></i></a>
					<a href="<?php echo esc_url( $share_url['pocket'] ); ?>" title="Get Pocket"><i></i></a>
				</div>
