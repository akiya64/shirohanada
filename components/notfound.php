<?php
/**
 * The template for displaying 404 pages (Not Found) or nomatch posts in search query.
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

?>

<article class="page nomatch-contents">

	<h3>ページまたは投稿が見つかりませんでした。</h3>
	
	<ol class="reasons">
		<li>未来の日付へのリンクが生成されている場合があります。</li>
		<li>記事のない日付アーカイブへのリンクだったかも知れません。</li>
		<li>あるいは、ページが削除された可能性があります。</li>
	</ol>

	<h3>Search Posts</h3>
		<div class="_halfwidth-inlarge">
			<?php get_search_form(); ?>
		</div>

	<h3>Show Posts</h3>
		<nav>
			<p class="move-recent-posts">
				<a href="<?php echo esc_url( get_month_link( '', '' ) ); ?>">Recent Posts</a>
			</p>
		</nav>

</article>

<?php get_footer(); ?>
