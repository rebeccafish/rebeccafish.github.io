<?php require('wp-lightboxJS/wp-lightboxJS.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" charset="utf-8" />
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/white.css" type="text/css" media="screen" charset="utf-8" />-->
<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/legacy.css" type="text/css" media="screen" charset="utf-8" />
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>

<div id="wrapper">

		<div id="header" class="clear">
			<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<ul id="navigation">
				<li><a href="<?php echo get_option('home'); ?>">Previous Work</a></li>
				<?php wp_list_pages('&title_li='); ?>
				<li><a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a></li>
			</ul>
			<h2><?php bloginfo('description'); ?></h2>
		</div>