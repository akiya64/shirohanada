<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header();
?>

	<h2 class="page-title"><?php echo single_cat_title( '', false ); ?></h2>

		<?php
			 $excerpt_flags = get_option( 'shirohanada_category_flag' );
			 $is_show_excerpt = $excerpt_flags[ get_query_var( 'cat' ) ];

		if ( $is_show_excerpt ) : ?>
	
				<?php
				/* Display posts Start the loop.*/
				while ( have_posts() ) :
					the_post();
			?>

			<article id="<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

			<header class="entry-header">
				<p class="entry-date"><i class="icon icon-time"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><time pubdate="<?php the_time( 'Y-n-j' ); ?>"><?php the_time( 'Y.n.j' ); ?></time></a></p>
				<?php the_tags( '<p><i class="icon icon-tag"></i>', ', ' ,'</p>' ); ?>
			</header>

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!--end entry-content-->

		</article>
	
		<?php endwhile; ?>

		<?php else :
		/* Display posts Start the loop.*/
	while ( have_posts() ) : the_post();
		get_template_part( 'components/content' );
		endwhile;
	endif; ?>

		

	<nav class="link-posts text-centering">
		<?php get_template_part( 'template-parts/navigation' ); ?>
	</nav>

<?php get_footer(); ?>
