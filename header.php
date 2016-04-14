<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri() ; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>
<body>

<?php if(is_front_page()): ?>
<div class="top-flex-container">

	<div class="top-banner-box">
		<img class="top-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/top_banner.jpg">
	</div>

	<header class="top-page-header">
		<h1 class="site-name"><?php bloginfo('name') ; ?></h1>
		<p class="site-description"><?php bloginfo('description') ; ?></p>
	</header>

<?php else: ?>
<a id="menu-button" class="button show-menu" href="#side-menu">
	<i class="icon icon-list"></i>
</a>
	
<header class="site-header entries" role="banner">

	<p class="site-description"><?php bloginfo('description') ; ?></p>

	<h1 class="site-name">
		<a href="<?php bloginfo('url'); ?>" class="link-top"><?php bloginfo('name') ; ?></a>
	</h1>

</header>
<?php endif; ?>
