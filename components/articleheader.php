<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.10.0
 */

?>

<header class="entry-header">
	<p class="entry-author vcard author" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<?php echo get_avatar( get_the_author_meta( 'ID' ),'32', 'mm', 'avatar', array( 'extra_attr' => 'itemprop="image"' ) ); ?>
			<span class="author-name fn" itemprop="name"><?php the_author_meta( 'display_name' ); ?></span>
		</p>
		<p class="entry-date">
			<i class="icon icon-time"></i><a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>"><time class="updated" pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
			<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
			</a>
		</p>
		<p class="entry-category">
			<i class="icon icon-<?php select_category_icon( get_the_category()[0]->slug ); ?>"></i><?php the_category( ', ' ); ?>
		</p>
		<?php the_tags( '<p class="entry-tags"><i class="icon icon-tag"></i>', ', ' ,'</p>' ); ?>
</header>
