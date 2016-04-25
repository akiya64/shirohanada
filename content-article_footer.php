<?php
/**
 * The template part for articlefooter goto top link & sharebutton
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since
 */
?>

<?php
	$encoded_url = urlencode(get_permalink());
	$share_text = urlencode( get_the_title().' | Autumnsky' );

	$share_url = array( 
		'twitter' => "https://twitter.com/intent/tweet?url=$encoded_url&text=$share_text&via=K_akiya",
		'facebook' => "https://facebook.com/sharer.php?u=$encoded_url&amp;t=$share_text",
		'google_plus' => "https://plus.google.com/share?url=$encoded_url",
		'pocket' => "https://getpocket.com/edit?url=".get_permalink(),
	);

?>

<div class="entry-margin"></div>

<div class="c-button-gotop">
	<a href="#top" class="gotop" title="Return Page Top"><i class="icon icon-eject"></i></a>
</div>


<div class="share-links">
		<a class="share-button" href="<?php the_permalink(); ?>#reply-title" title="Comment this post"><i class="icon icon-comment"></i></a>
		<a class="share-button" href="<?php echo $share_url['twitter']; ?>" title="share Twitter" target="_blank"><i class="icon icon-share-twitter"></i></a>
		<a class="share-button" href="<?php echo $share_url['facebook'] ?>" title="share Facebook" rel="nofollow" target="_blank"><i class="icon icon-share-facebook"></i></a>
	<a class="share-button" href="<?php echo $share_url['google_plus']; ?>" title="+1 GooglePlus" target="_blank"><i class="icon icon-share-google-plus"></i></a>
	<a class="share-button" href="<?php echo $share_url['pocket']; ?>" title="Get Pocket"><i class="icon icon-get-pocket"></i></a>
</div>

