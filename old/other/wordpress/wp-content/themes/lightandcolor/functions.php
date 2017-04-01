<?php

/*number of articles per page
must match whatever is set under Admin>Settings>Reading>"Blog pages show at most...posts"
if set incorrectly, the <ol> numbering on archive pages will be incorrect */
$numarticlesperpage = 10;
function numarticlesperpage() {
	return $numarticlesperpage;
}


/*sets category IDs so can change them all in one place: */
$web_id = 14;
$print_id = 7;
$motion_id = 16;
$more_id = 19;


/*sets category names so can change them all in one place: */
$web_name = 'Web';
$print_name = 'Print';
$motion_name = 'Motion';
$more_name = '&+?';


/*sets category slugs so can change them all in one place: */
$web_slug = 'web';
$print_slug = 'print';
$motion_slug = 'motion';
$more_slug = 'more';


/*sets page IDs so can change them all in one place: */
$about_id = 2;

/*sets page names so can change them all in one place: */
$about_name = 'About';



/********************************************************************************************************
* category & PAGE-SPECIFIC FUNCTIONS *
********************************************************************************************************/

//returns the id variables above so they don't have to be directly accessed
function id($s) {
	global $web_id, $print_id, $motion_id, $more_id; //categories
	global $about_id; //pages
	if ($s=='web') $id = $web_id;
	else if ($s=='print') $id = $print_id;
	else if ($s=='motion') $id = $motion_id;
	else if ($s=='more') $id = $more_id;
	else if ($s=='about') $id = $about_id;
	else $id = null;
	return $id;
}

//returns the name variables above so they don't have to be directly accessed
function name($s) {
	global $web_name, $print_name, $motion_name, $more_name; //categories
	global $about_name; //pages
	if ($s=='web') $name = $web_name;
	else if ($s=='print') $name = $print_name;
	else if ($s=='motion') $name = $motion_name;
	else if ($s=='more') $name = $more_name;
	else if ($s=='about') $name = $about_name;
	else $name = null;
	return $name;
}

//returns the slug variables above so they don't have to be directly accessed
function slug($s) {
	global $web_slug, $print_slug, $motion_slug, $more_slug;
	global $about_slug; //pages
	if ($s=='web' || $s==id('web')) $slug = $web_slug;
	else if ($s=='print' || $s==id('print')) $slug = $print_slug;
	else if ($s=='motion' || $s==id('motion')) $slug = $motion_slug;
	else if ($s=='more' || $s==id('more')) $slug = $more_slug;
	else if ($s=='about' || $s==id('about')) $slug = $about_slug;
	else $slug = null;
	return $slug;
}
 
/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
 function post_is_in_descendant_category( $cats, $_post = null )
{
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}

 
//returns the category of a post or the category page, as a category id integer
//calls post_is_in_descendant_category() wordpress function above
function category_id() {
	global $web_id, $print_id, $motion_id, $more_id, $about_id, $feature_id;
	if (is_category() || is_single()) {
		if (in_category($web_id) || post_is_in_descendant_category($web_id)) $category=$web_id;
		else if (in_category($print_id) || post_is_in_descendant_category($print_id)) $category=$print_id;
		else if (in_category($motion_id) || post_is_in_descendant_category($motion_id)) $category=$motion_id;
		else if (in_category($more_id) || post_is_in_descendant_category($more_id)) $category=$more_id;
		else if (in_category($about_id) || post_is_in_descendant_category($back_page_id)) $category=$about_id;
		else $category=null;
	}
	else $category=null;
	return $category;
}


//returns the category of a post or the category page, as a category name string
//calls category_id() above
function category_name() {
	global $web_id, $print_id, $motion_id, $more_id, $about_id;
	global $web_name, $print_name, $motion_name, $more_name, $about_name;
	$id = category_id();
	if ($id == $web_id) $name = $web_name;
	else if ($id == $print_id) $name = $print_name;
	else if ($id == $motion_id) $name = $motion_name;
	else if ($id == $more_id) $name = $more_name;
	else if ($id == $about_id) $name = $about_name;
	else $name = null;
	return $name;
}

//returns the category of a post or the category page, as a category name string
//calls category_id() above
function category_slug() {
	global $web_id, $print_id, $motion_id, $more_id, $about_id;
	global $web_slug, $print_slug, $motion_slug, $more_slug, $about_slug;
	$id = category_id();
	if ($id == $web_id) $name = $web_slug;
	else if ($id == $print_id) $name = $print_slug;
	else if ($id == $motion_id) $name = $motion_slug;
	else if ($id == $more_id) $name = $more_slug;
	else if ($id == $about_id) $name = $about_slug;
	else $name = null;
	return $name;
}


//returns the type of page
//useful for retrieving correct style sheets
function get_type() {
	if (is_category()) $type = "category";
	else if (is_single()) $type = "single";
	else if (is_home()) $type = "home";
	else if (is_page()) $type = "page";
	else if (is_archive()) $type = "archive";
	else $type = "";
	return $type;
}




/********************************************************************************************************
* GRAPHICS & CROPPING FUNCTIONS *
********************************************************************************************************/

//adds slideshow crop to graphics
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 100, 100, true ); // Normal post thumbnails
	add_image_size('medium_thumb', 175, 115, true); // for normal thumbs on category pages
}


/* End slideshow functions */



/********************************************************************************************************
* OTHER FUNCTIONS *
********************************************************************************************************/

/* gets current page URL, Apache and IIS
* used for correct numbering on archive pages after the first (see author.php, date.php, and category.php)
*/

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
