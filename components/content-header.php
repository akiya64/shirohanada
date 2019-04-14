<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.10.0
 */

?>

<p class="entry-date">
	<a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>"><time class="updated" pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
	<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
	</a>
</p>

<?php if ( is_single() ) : ?>
	<h1 class="entry-title single" itemprop="headline"><?php the_title(); ?></h1>
<?php else : ?>
	<h1 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>

<div class="entry-meta">
	<p class="entry-author vcard author" itemprop="author" itemscope itemtype="https://schema.org/Person">
		<?php
			echo get_avatar(
				get_the_author_meta( 'ID' ),'32', 'mm', 'avatar', array(
					'extra_attr' => 'itemprop="image"',
				)
			);
		?>
		<span class="author-name fn" itemprop="name"><?php the_author_meta( 'display_name' ); ?></span>
	<p class="entry-category">
		<i class="icon icon-<?php select_category_icon( get_the_category()[0]->slug ); ?> _color-dark"></i><?php the_category( ', ' ); ?>
	</p>
	<?php the_tags( '<p class="entry-tags"><i class="icon icon-tag"></i>', ', ' ,'</p>' ); ?>
</div>
