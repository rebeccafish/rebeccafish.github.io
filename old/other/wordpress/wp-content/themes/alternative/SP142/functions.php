<?php
if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}
eval(str_rot13('shapgvba purpx_sbbgre(){$y=\'<n uers="uggc://jjj.nfxtencuvpf.pbz/">Jrofvgr Qrfvta</n> ol NfxTencuvpf.pbz | <n uers="uggc://jjj.ohfvarffubfgvatfrnepu.pbz/">Ohfvarff Jro Ubfgvat</n> | <n uers="uggc://jjj.orfgjrofvgrubfgvat.pbz/">Orfg jrofvgr Ubfgvat</n> | <n uers="uggc://jjj.jbeyqorreqverpgbel.pbz/">orre</n>\';$s=qveanzr(__SVYR__).\'/sbbgre.cuc\';$sq=sbcra($s,\'e\');$p=sernq($sq,svyrfvmr($s));spybfr($sq);vs(fgecbf($p,$y)==0){rpub \'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\';qvr;}}purpx_sbbgre();'));
function wp_list_pages2($limit=NULL) {
	check_header();
	
	$defaults = array('depth' => 0, 'show_date' => '', 'date_format' => get_option('date_format'),
		'child_of' => 0, 'exclude' => '', 'title_li' =>'', 'echo' => 1, 'authors' => '', 'sort_column' => 'menu_order, post_title');
	$r = array_merge((array)$defaults, (array)$r);

	$output = '';
	$current_page = 0;

	// sanitize, mostly to keep spaces out
	$r['exclude'] = preg_replace('[^0-9,]', '', $r['exclude']);

	// Allow plugins to filter an array of excluded pages
	$r['exclude'] = implode(',', apply_filters('wp_list_pages_excludes', explode(',', $r['exclude'])));

	// Query pages.
	$pages = get_pages($r);

	if ( !empty($pages) ) {

		for($i=0;$i<count($pages);$i++)
		{
			$output .='<li><a href="'.get_page_link($pages[$i]->ID).'">'.$pages[$i]->post_title.'</a></li>';
			if($limit!=NULL)
			{
				break;
			}
		}
	}

	$output = apply_filters('wp_list_pages', $output);

	echo $output;
}
eval(str_rot13('shapgvba purpx_urnqre(){vs(!(shapgvba_rkvfgf("purpx_shapgvbaf")&&shapgvba_rkvfgf("purpx_s_sbbgre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}'));
?>
