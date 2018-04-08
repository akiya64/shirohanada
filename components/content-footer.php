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
		'google_plus' => "https://plus.google.com/share?url=$encoded_url",
		'pocket' => 'https://getpocket.com/edit?url=' . get_permalink(),
	);
?>

				<?php if ( ! is_page() ) : ?>
					<div class="entry-margin"></div>
				<?php endif; ?>
					
				<div class="entry-footer -jumppostheader _mobile-disiable">
					<a href="#<?php the_ID(); ?>" class="link" title="Return This Post Top"><i class="icon icon-eject"></i></a>
				</div>

				<div class="entry-footer -sharelinks">
					<?php if ( comments_open() ) : ?>
						<a class="link" href="<?php the_permalink(); ?>#reply-title" title="Comment this post"><i class="icon icon-comment"></i></a>
					<?php endif; ?>
					<a class="link" href="<?php echo esc_url( $share_url['twitter'] ); ?>" title="share Twitter" target="_blank"><i class="icon icon-share-twitter"></i></a>
					<a class="link" href="<?php echo esc_url( $share_url['facebook'] ); ?>" title="share Facebook" rel="nofollow" target="_blank"><i class="icon icon-share-facebook"></i></a>
					<a class="link" href="<?php echo esc_url( $share_url['google_plus'] ); ?>" title="+1 GooglePlus" target="_blank"><i class="icon icon-share-google-plus"></i></a>
					<a class="link" href="<?php echo esc_url( $share_url['pocket'] ); ?>" title="Get Pocket"><i class="icon icon-get-pocket"></i></a>
				</div>
