<?php
/**
 * The template part for front page
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

get_header(); ?>

<main role="main" itemprop="mainEntityOfPage">

		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
		?>

			<h2 itemprop="headline"><?php the_title(); ?></h2>

			<article id="<?php the_ID(); ?>" <?php post_class( 'is-pagetemplate' ); ?> itemprop="articleBody">

				<div>
					<?php the_content(); ?>
				</div>

				<p>
					<time pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
					<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
				<p itemprop="author" itemscope itemtype="https://schema.org/Person">Author:<span itemprop="name"><?php the_author(); ?></span></p>

			<?php get_template_part( 'components/content', 'footer' ); ?>

			</article>

		<?php endwhile; ?>

</main><!--end article-area-->

<?php get_footer(); ?>
