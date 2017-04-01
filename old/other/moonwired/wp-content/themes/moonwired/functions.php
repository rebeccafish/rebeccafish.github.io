<?php


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


//returns the category id of the last issue
function get_last_issue_id($omit_cat=array()) {
	if ($omit_cat == NULL) {$omit_cat[0]='';}
	$omit_cat_string = '-'.$omit_cat[0]; 
	for ($i=1; $i<sizeof($omit_cat); ++$i) {
		$omit_cat_string .= ',-'.$omit_cat[$i];
	}
	$last_post = get_posts('numberposts=1&category='.$omit_cat_string);
	if ($last_post == NULL) {return NULL;}
	else {
		$last_post_cat_list = get_the_category($last_post[0]->ID);
		$last_post_issue_id = $last_post_cat_list[0]->cat_ID;
		return $last_post_issue_id;
	}
}



// create more than one sidebar
if ( function_exists ('register_sidebar')) { 
    register_sidebar ('page');
    register_sidebar ('single'); 
}


function posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
			get_the_author()
		)
	);
}

function posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}



/*

function create_issue_taxonomy() {
	
	$labels = array(
    	'name' => _x( 'Issue', 'taxonomy general name' ),
    	'singular_name' => _x( 'Issue', 'taxonomy singular name' ),
    	'search_items' =>  __( 'Search Issues' ),
    	'all_items' => __( 'All Issues' ),
    	'parent_item' => __( 'Parent Issue' ),
    	'parent_item_colon' => __( 'Parent Issue:' ),
    	'edit_item' => __( 'Edit Issue' ), 
    	'update_item' => __( 'Update Issue' ),
    	'add_new_item' => __( 'Add New Issue' ),
    	'new_item_name' => __( 'New Issue Name' ),
    	'menu_name' => __( 'Issues' ),
  	); 	
	
	
	// create a new taxonomy
	register_taxonomy('issues', 'post', array(
		'hierarchical' => true,
    	'labels' => $labels,
  	));
}
    
add_action( 'init', 'create_issue_taxonomy' );
*/

?>