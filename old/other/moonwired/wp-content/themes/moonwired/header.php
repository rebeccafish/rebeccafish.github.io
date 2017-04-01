<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/header_footer.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/category.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/single.css" />
	
	<?php /* Get only necessary stylesheets */
	
	$type = get_type(); //defined in functions.php
	if ($type=="home") {
		?> <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/home.css" /> <?php
	} /*
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
	*/?>



<?php /* Load any javascript libraries here */ ?> 
	
	
<?php wp_head(); ?>

</head>

<body>

<div id="left_bar">
	<div id="header">
		<?php /* Logo */ ?>
		<div id="logo"> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Moonwired | Amanecidas" /></a></div>
	</div> <?php /* End header */ ?>
	
	
	<div id="navigation">
		<ul>
			<li><a href="<?php echo get_category_link(get_last_issue_id()); ?>">Current Issue</a>
				<ul>
					<?php
					$latest_posts = new WP_Query();
					$latest_posts->query('cat='.get_last_issue_id());
					
					if ($latest_posts->have_posts()) : while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
						<li class="last_issue_article_link">
							<a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?></a>
						</li>
					<?php endwhile; endif; ?> 
				</ul>
			</li>
			<li><a href="<?php echo get_page_link(5); ?>">Previous Issues</a><?php //returns Archives page ?>
				<ul>
					<?php 
					/*the ordering is alphabetical, so in order to list the issues chronologically, they must be name Issue 1, Issue 2, etc.*/
					$categories = get_categories('orderby=name&order=desc'); 
					foreach ($categories as $category) {?>
						<li class="category_link">
							<a href="<?php echo esc_url(get_category_link($category->cat_ID))?>"><?php echo $category->cat_name;?></a>
						</li>
					<?php } ?>
				</ul>
			</li>
			<li><a href="<?php echo get_page_link(2); ?>">About Us</a></li>
		</ul>
	</div> <?php /* End navigation */ ?>
</div>

<?php /*  Begin body */ ?>
<div id="body_wrap">