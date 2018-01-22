<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.9
 */

get_header(); ?>

<main class="article-area" role="main" itemprop="mainEntityOfPage">

	<h2 class="page-title">
		404 Not Found
	</h2>

<?php get_template_part( 'components/notfound' ); ?>

</main><!--end article-area-->

<?php get_footer(); ?>
