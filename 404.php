<?php get_header(); ?>

<div class="main-contents">

<div class="articles">

	<h2 class="page-title">
		404 Not Found
	</h2>

<article class="page-notfound">

	<h3>ページが見つかりませんでした。</h3>
	
	<ol class="margin-left_2rem">
		<li>未来の日付へのリンクが生成されている場合があります。</li>
		<li>記事のない日付アーカイブへのリンクだったかも知れません。</li>
		<li>あるいは、ページが削除された可能性があります。</li>
	</ol>

	<h3>Search Posts</h3>
		<div class="width-half-inlarge">
			<?php get_search_form(); ?>
		</div>

	<h3>Show Posts</h3>
		<nav>
			<p class="move-recent-posts">
			<a href="<?php echo get_month_link('', ''); ?>">Recent Posts</a>
			</p>
		</nav>

</article>


</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
