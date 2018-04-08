<?php
/**
 * The template part for header
 *
 * @package WordPress
 * @subpackage shirohanada
 * @since shirohanada 0.8
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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
		<a href="<?php echo esc_url( home_url() ); ?>" class="link"><?php bloginfo( 'name' ); ?></a>
	</h1>

</header>

<div class="main-contents" itemscope itemtype="schema.org/BlogPosting">

<?php endif; ?>
