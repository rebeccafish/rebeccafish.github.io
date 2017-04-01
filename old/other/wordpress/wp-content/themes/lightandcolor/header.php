<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> xmlns:fb="http://www.facebook.com/2008/fbml">

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />

<title>
<?php bloginfo('name'); ?>
<?php if(wp_title('', false)) { echo ' &raquo; '; } //uses >> as divider ?>
<?php wp_title(''); ?>
</title>

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/favicon.png" type="image/png" />


<?php /* Begin Stylesheet references */ ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/grid.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

	<?php 
	/* Get only necessary stylesheets */
	$type = get_type(); //defined in functions.php
	if ($type=="home") {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/home.css" /> <?php
	}
	else if ($type=="page") {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/page.css" /> <?php
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" /> <?php
	}
	else if ($type=="single") {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/single.css" /> <?php
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" /> <?php
	}
	else if (is_category(id('web'))||is_category(id('print'))||is_category(id('motion'))||is_category(id('more'))) {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/category_page.css" /> <?php
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" /> <?php
	}
	
	else if ($type=="archive"|| $type=="category") {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/archive.css" /> <?php
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" /> <?php
	}
	else {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/404.css" /> <?php
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" /> <?php
	}		
	?>

<?php /* Load any javascript libraries here */ ?> 
	
	
<?php wp_head(); ?>

</head>

<body>
<div id="wrap">
<?php if (!is_home()) { ?>

<?php /* Begin header */ ?>
<div id="header">

	<?php /* Logo */ ?>
	<div id="logo"> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <img src="<?php bloginfo('template_url'); ?>/images/logo_small.png" alt="The Pioneer" /></a></div>

	<div id="divider"></div>

	<?php /* Category */ ?>
	<div id="category" class="<?php echo category_slug() ?>">
	<?php 
	$category_id = category_id(); //defined in functions.php
	if ($category_id!=null) { ?>
		<a href="<?php get_category_link($category); ?>">
		<img src="<?php bloginfo('template_url'); ?>/images/categories/<?php echo category_slug()?>.png" alt="<?php echo category_slug()?>" 
		<?php //limit height to 12 if not fancy 'more' title, which needs to be bigger
		if (category_slug()!=slug('more')) echo 'height="12"' ?> /></a> 
	<?php } ?>
	</div>
	
	<?php /* Navigation */ ?>
	<div id="navigation"></div>


<?php /* End header */ ?>
</div>

<?php } ?>

<?php /*  Begin body */ ?>
<div id="body_wrap">