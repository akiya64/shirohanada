<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.10.0
 */

?>

<p>
	<a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>"><time pubdate="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
	<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>">
	</a>
</p>

<?php if ( is_single() ) : ?>
	<h1 itemprop="headline"><?php the_title(); ?></h1>
<?php else : ?>
	<h1 class="entry-title
	<?php
	if ( get_query_var( 'is_show_excerpt' ) ) {
		echo 'excerpt';}
?>
 " itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>

<div>
	<p itemprop="author" itemscope itemtype="https://schema.org/Person">
		<?php
			echo get_avatar(
				get_the_author_meta( 'ID' ),'64', 'mm', 'avatar', array(
					'extra_attr' => 'itemprop="image"',
				)
			);
		?>
		<span itemprop="name"><?php the_author_meta( 'display_name' ); ?></span>
	<p>
		<i></i><?php the_category( ', ' ); ?>
	</p>
	<?php the_tags( '<p><i></i>', ', ' ,'</p>' ); ?>
</div>
