<?php
/**
 * The template for displaying 404 pages (Not Found) or nomatch posts in search query.
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.9
 */

?>

<article class="type-page nomatch-contents">

	<?php if ( is_search() ) : ?>
		<p class="description">検索ワード："<?php echo get_search_query( false ); ?>"を含む記事はありませんでした。<br>
		</p>

	<?php else : ?>

		<p class="description">お探しのページが見つかりませんでした。<br>移動、削除されたかも知れません。</p>

<?php endif; ?>

		<nav class="links _halfwidth-inlarge">
			<a class="link" href="<?php echo esc_url( get_month_link( '', '' ) ); ?>">最新の投稿をみる</a><a class="link" href="<?php echo esc_url( home_url() ); ?>">トップページへ戻る</a>
		</nav>

		<h3>Search Posts</h3>
			<div class="_halfwidth-inlarge">
				<?php get_search_form(); ?>
			</div>


	</article>
</article>
