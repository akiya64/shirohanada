<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<div class="article-area" role="main" itemprop="mainEntityOfPage">

		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
		?>

			<h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2>

			<article id="<?php the_ID(); ?>" <?php post_class( 'is-pagetemplate' ); ?> itemprop="articleBody">

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<p class="footer-date _text-alignright">
					<time class="updated" pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
					<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
				<p class="footer-author _text-alignright" itemprop="author" itemscope itemtype="https://schema.org/Person">Author:<span itemprop="name"><?php the_author(); ?></span></p>

			<?php get_template_part( 'components/articlefooter' ); ?>

			</article>

		<?php endwhile; ?>

</div><!--end article-area-->

<?php get_footer(); ?>
