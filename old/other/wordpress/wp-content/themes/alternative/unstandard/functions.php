<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar - Main',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Sidebar - Single',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Footer - Shared',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
}

add_filter('comments_template', 'legacy_comments');
	function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
	$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}
?>