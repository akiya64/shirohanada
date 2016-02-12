<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage
 * @since
 */
?>

<aside id="side-menu" class="sidebar">
	<button id="hide-menu-button" class="button hide-menu-button"><i class="icon icon-exit"></i></button>

	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

</aside><!--End Side Bar-->
