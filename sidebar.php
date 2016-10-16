<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

?>

<aside id="side-menu" class="widget-area">
	<button id="hide-menu-button" class="button hide-menu-button"><i class="icon icon-exit"></i></button>

	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

</aside><!--End Side Bar-->
