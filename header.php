<?php
/**
 * The template part for header
 *
 * @package WordPress
 * @subpackage Shirohanada
 * @since Shirohanada 0.8
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>
<body>

<?php if ( ! is_front_page() ) : ?>

<a id="menu-button" class="show-menu" href="#side-menu">
	<i class="icon icon-list"></i>
</a>

<a id="gotop-button" class="go-top _mobile-disiable" href="#top">
	<i class="icon icon-angle-top"></i>
</a>
	
<header class="site-header" role="banner">

	<p class="site-description _inline"><?php bloginfo( 'description' ); ?></p>

	<h1 class="site-name _inline">
		<a href="<?php bloginfo( 'url' ); ?>" class="link"><?php bloginfo( 'name' ); ?></a>
	</h1>

</header>

<?php endif; ?>
