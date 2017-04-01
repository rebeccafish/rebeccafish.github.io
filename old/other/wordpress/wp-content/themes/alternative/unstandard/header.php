<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Posts tagged &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="main-wrapper">
	<div id="leaderboard" class="fix">
		<h1 id="site-name"><a href="<?php echo get_settings('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a></h1>
		<ul id="main-nav" class="right">
			<li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
			<li><a href="#" title="About">About</a></li>
			<li class="rss-now"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">Subscribe</a></li>
		</ul>
	</div>