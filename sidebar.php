<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

?>

<aside id="side-bar" class="side-widgets">
	<button id="hide-menu-button" class="button hide-menu _large_view-disiable"><i class="icon icon-exit"></i></button>

	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

</aside><!--End Side Bar-->
