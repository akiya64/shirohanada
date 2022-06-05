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

<a id="menu-button" href="#side-menu">
	<i></i>
</a>

<header role="banner">
	<p>
		<?php bloginfo( 'description' ); ?>
	</p><h1>
		<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
	</h1>
</header>

<div itemscope itemtype="schema.org/BlogPosting">

<?php endif; ?>
