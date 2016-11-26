<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

?>

<article id="<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single() ) : ?>
		<h1 class="entry-title single" itemprop="headline"><?php the_title();?></h1>
	<?php else : ?>
		<h1 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
	<?php endif; ?>

	<header class="entry-header">
		<p class="entry-author" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<?php echo get_avatar( get_the_author_meta( 'ID' ),'32', 'mm', 'avatar', array( 'extra_attr' => 'itemprop="image"' ) ); ?>
			<span class="author-name" itemprop="name"><?php the_author_meta( 'display_name' ); ?>
		</p>
		<p class="entry-date">
			<i class="icon icon-time"></i><a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>"><time class="updated" pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
			<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
			</a>
		</p>
		<p class="entry-category">
			<i class="icon icon-<?php select_category_icon( get_the_category()[0]->slug ); ?>"></i><?php the_category( ',' ); ?>
		</p>
		<?php the_tags( '<p class="entry-tags"><i class="icon icon-tag"></i>', ', ' ,'</p>' ); ?>

	</header>

	<div class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div><!--end entry-content-->

	<?php get_template_part( 'template-parts/content', 'articlefooter' ); ?>

	<?php
		/* show comment form in entry-content column, only single.php */
	if ( is_single() ) :
	?>
	<div class="entry-margin"></div>
	<div class="entry-comments">

	<?php comments_template();?>

	</div>

	<?php endif; ?>

</article>
