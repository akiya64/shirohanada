<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

get_header(); ?>

<?php
	if( is_category() ) :
		$current_page_title = '<h2 class="page-title">'.single_cat_title("", False ).'</h2>';
	elseif ( is_tag() ) :
		$current_page_title = '<h2 class="page-title">'.single_tag_title("", False ).'</h2>' ;
	elseif ( is_single() ) :
		$current_page_title = '' ;
	else :
		/* this case is expected only RecentPost */
		$current_page_title =  '<h2 class="page-title">Latest Posts</h2>';
	endif ;
?>

<div class="main-contents">

<div class="article-area">

	<?php echo $current_page_title; ?>

	<?php
		/* Display posts Start the loop.*/
		while ( have_posts() ):
			the_post();
	?>
	<article id="<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

		<header class="entry-header">
			<p class="entry-date"><i class="icon icon-time"></i><a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>"><time pubdate="<?php the_time('Y-n-j'); ?>"><?php the_time('Y.n.j'); ?></time></a></p>
			<?php the_tags('<p><i class="icon icon-tag"></i>', ', ' ,'</p>'); ?>
		</header>

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!--end entry-content-->

		</article>
			
		<?php endwhile; ?>

	<nav class="link-posts text-centering">
		<?php get_template_part( 'template-parts/navigation' ); ?>
	</nav>

</div><!--end articles-->

<?php get_sidebar(); ?>

</div><!--end main contents-->

<?php get_footer(); ?>
