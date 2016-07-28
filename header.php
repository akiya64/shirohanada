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
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>
<body>

<?php if ( ! is_front_page() ) : ?>

<a id="menu-button" class="button show-menu" href="#side-menu">
	<i class="icon icon-list"></i>
</a>

<a id="gotop-button" class="button gotop-button" href="#top">
	<i class="icon icon-angle-top"></i>
</a>
	
<header class="site-header entries" id="top" role="banner">

	<p class="site-description"><?php bloginfo( 'description' ); ?></p>

	<h1 class="site-name">
		<a href="<?php bloginfo( 'url' ); ?>" class="link-top"><?php bloginfo( 'name' ); ?></a>
	</h1>

</header>

<?php endif; ?>
