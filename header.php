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
