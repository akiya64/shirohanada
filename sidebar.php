<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

?>

<aside id="side-bar">
	<button id="hide-menu-button"><i></i></button>

	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

</aside><!--End Side Bar-->
