<?php
/*
Plugin Name: wpSEO
Plugin URI: http://www.wpseo.org
Description: The wpSEO plugin helps you optimize your blog for SEO purposes by eliminating issues with duplicate content and specifying meta tags and page titles for the different pages of your blog.
Author: Sergej Müller
Version: 2.5.1
Author URI: http://www.ebiene.de
*/

$GLOBALS['language'] = array(
'wp_seo_license'=> 'Commercial use? <a href="http://www.wpseo.us/license/" target="_blank">Buy a license</a>',
'wp_seo_donate'=> 'Private use? <a href="http://www.wpseo.us/donate/" target="_blank">Donate via PayPal</a>',
'wp_seo_website'=> '<a href="http://www.wpseo.us" target="_blank">Website</a>',
'wp_seo_manual'=> '<a href="http://www.wpseo.us/manual/" target="_blank">Documentation</a>',
'wp_seo_support'=> '<a href="http://www.wpseo.us/imprint/" target="_blank">Support</a>',
'wp_seo_by'=> 'by',
'wp_seo_home'=> 'Home',
'wp_seo_single'=> 'Post',
'wp_seo_page'=> 'Page',
'wp_seo_category'=> 'Category',
'wp_seo_search'=> 'Search',
'wp_seo_archive'=> 'Archives',
'wp_seo_tagging'=> 'Tag',
'wp_seo_404'=> 'Error',
'wp_seo_title'=> 'Title',
'wp_seo_update'=> 'Update settings',
'wp_seo_update_done'=> 'Update successful',
'wp_seo_update_available'=> 'A new version of the plugin can be downloaded at: <a href="http://www.wpseo.us/installation/">www.wpseo.us/installation/</a>.',
'wp_seo_please_donate'=> 'You can support the wpSEO plugin by making a donation. <a href="http://www.wpseo.us/donate/" target="_blank">Donate via PayPal</a>. Thanks!',
'wp_seo_page_teaser'=> 'wpSEO Options',
'wp_seo_title_convert'=> 'Edit page titles',
'wp_seo_title_enable'=> 'Activate formatting of the title by wpSEO',
'wp_seo_title_separator'=> 'Separator',
'wp_seo_title_separator_info'=> '(Special signs can be entered as HTML. Example: &amp;laquo; becomes &laquo;)',
'wp_seo_title_description'=> 'Label',
'wp_seo_title_description_info' => '(Only used if chosen as a Wildcard above)',
'wp_seo_title_format'=> 'Formatting options',
'wp_seo_title_format_info'=> '(Wildcards will be replaced in the selected order)',
'wp_seo_title_count'=> 'Page number',
'wp_seo_title_count_view'=> 'Activate page numeration',
'wp_seo_title_count_info'=> '(Only displayed if pages in the archives, categories or search generate more than one page)',
'wp_seo_title_author'=> 'Author of a post',
'wp_seo_title_author_view'=> 'Show author of current post',
'wp_seo_title_author_info'=> '(Only displayed if posts or static pages are called)',
'wp_seo_title_manually'=> 'Write a Post',
'wp_seo_title_manually_on'=> 'Option to enter the value for the &lt;title&gt; tag directly while writing the post. This overrides the default value.',
'wp_seo_title_manually_info'=> '(Allows direct entry of the &lt;title&gt; tag on the Write Post page)',
'wp_seo_title_manually_only'=> 'Deactivate a automatic generation of the title',
'wp_seo_title_channel'=> array(
'%blog%'=> 'blogname',
'%blog% %clip% %area%'=> 'blogname separator label',
'%blog% %clip% %title%'=> 'blogname separator title',
'%blog% %clip% %tag%'=> 'blogname separator tag',
'%blog% %clip% %area% %clip% %title%'=> 'blogname separator label separator title',
'%blog% %clip% %area% %clip% %tag%'=> 'blogname separator label separator tag',
'%blog% %clip% %keywords% %clip% %title%'=> 'blogname separator keywords separator title',
'%blog% %clip% %category% %clip% %title%'=> 'blogname separator category separator title',
'%blog% %clip% %title% %clip% %keywords%'=> 'blogname separator title separator keywords',
'%blog% %clip% %title% %clip% %category%'=> 'blogname separator title separator category',
'%title%'=> 'title',
'%title% %clip% %blog%'=> 'title separator blogname',
'%title% %clip% %category%'=> 'title separator category',
'%title% %clip% %area% %clip% %blog%'=> 'title separator label separator blogname',
'%title% %clip% %keywords% %clip% %blog%'=> 'title separator keywords separator blogname',
'%title% %clip% %category% %clip% %blog%'=> 'title separator category separator blogname',
'%title% %clip% %category% %clip% %keywords%' => 'title separator category separator keywords',
'%tag% %clip% %blog%'=> 'tag separator blogname',
'%tag% %clip% %area% %clip% %blog%'=> 'tag separator label separator blogname',
'%category% %clip% %title% %clip% %blog%'=> 'category separator title separator blogname',
'%category% %clip% %title%'=> 'category separator title',
'%area% %clip% %blog%'=> 'label separator blogname',
'%keywords% %clip% %title% %clip% %blog%'=> 'keywords separator title separator blogname',
'%keywords% %clip% %category% %clip% %title%' => 'keywords separator category separator title'
),
'wp_seo_desc_convert'=> 'Edit Description (META)',
'wp_seo_desc_enable'=> 'Activate formatting of the META description by wpSEO',
'wp_seo_desc_default'=> 'Default',
'wp_seo_desc_default_info'=> '(Only used, if selected as a value below)',
'wp_seo_desc_dynamic'=> 'Variables',
'wp_seo_desc_dynamic_info'=> '(Description content is dynamically generated from titles and the first post)',
'wp_seo_desc_counter'=> 'Number of words',
'wp_seo_desc_counter_info'=> '(Maximum word count for description content before description is truncated)',
'wp_seo_desc_manually'=> 'Write a post',
'wp_seo_desc_manually_on'=> 'Option to enter the description directly while writing the post. This overrides the default value.',
'wp_seo_desc_manually_info'=> '(Option to directly enter the description while writing the post. This overrides the default value)',
'wp_seo_desc_home'=> array(
0 => 'Default',
1 => 'Excerpt of the first post',
2 => 'Titles of all listed posts'
),
'wp_seo_desc_single'=> array(
0 => 'Default',
1 => 'Titleof the current post',
2 => 'Excerpt of the current post',
3 => 'A part of the excerpt if present'
),
'wp_seo_desc_page'=> array(
0 => 'Default',
1 => 'Titleof the current post',
2 => 'Excerpt of the current post'
),
'wp_seo_desc_category'=> array(
0 => 'Default',
1 => 'Category description',
2 => 'Titles of all listed posts'
),
'wp_seo_desc_search'=> array(
0 => 'Default',
1 => 'Excerpt of the first post',
2 => 'Titles of all listed posts'
),
'wp_seo_desc_archive'=> array(
0 => 'Default',
1 => 'Excerpt of the first post',
2 => 'Titles of all listed posts'
),
'wp_seo_desc_tagging'=> array(
0 => 'Default',
1 => 'Excerpt of the first post',
2 => 'Titles of all listed posts'
),
'wp_seo_desc_404'=> array(
0 => 'Default'
),
'wp_seo_key_convert'=> 'Edit keywords (META)',
'wp_seo_key_enable'=> 'Activate formatting of the META keywords by wpSEO',
'wp_seo_key_default'=> 'Default',
'wp_seo_key_default_info'=> '(Only used if selected below from a dropdown menu)',
'wp_seo_key_dynamic'=> 'Variable value',
'wp_seo_key_dynamic_info'=> '(Keywords content is dynamically generated from titles or the first post)',
'wp_seo_key_dynamic_warn'=> 'The Simple Tagging Plugin (STP) already generates keywords',
'wp_seo_key_counter'=> 'Number of words',
'wp_seo_key_counter_info'=> '(Maximum word count for keyword content before content is truncated)',
'wp_seo_key_length'=> 'Short words',
'wp_seo_key_length_chars'=> 'Number of characters',
'wp_seo_key_length_info'=> '(Short words will be filtered from the dynamic value)',
'wp_seo_key_blacklist'=> 'Blacklist',
'wp_seo_key_blacklist_info'=> '(Keywords of the blacklist will be ignored. Value is case-sensitive and separated by a space)',
'wp_seo_key_completion'=> 'Completion',
'wp_seo_key_completion_on'=> 'Activate automatic completion',
'wp_seo_key_completion_info'=> '(If the META tag consists of less words than allowed, default entries will be used)',
'wp_seo_key_substantive'=> 'Nouns',
'wp_seo_key_substantive_on'=> 'Use only nounds as keywords',
'wp_seo_key_substantive_info'=> '(Only single nouns will be used as keywords)',
'wp_seo_key_relevance'=> 'Relevance',
'wp_seo_key_relevance_on'=> 'Activate relevance for keywords',
'wp_seo_key_relevance_info'=> '(Words in post or title will be counted and the most frequent ones will be positioned first)',
'wp_seo_key_labeling'=> 'Manual tagging',
'wp_seo_key_labeling_on'=> 'Detect manually tagged words: &lt;span class="wpseo_keyword"&gt;...&lt;/span&gt;',
'wp_seo_key_labeling_info'=> '(Tagged words will be interpreted as most relevant keywords)',
'wp_seo_key_xhtml'=> 'Detection of highlighting (XHTML)',
'wp_seo_key_xhtml_on'=> 'Detects the following XHTML tags: &lt;em&gt;...&lt;/em&gt;, &lt;strong&gt;...&lt;/strong&gt;',
'wp_seo_key_xhtml_info'=> '(Tagged words will be interpreted as most relevant keywords)',
'wp_seo_key_manually'=> 'Write a post',
'wp_seo_key_manually_on'=> 'Option to directly enter the keywords while writing the post. This overrides the default value.',
'wp_seo_key_manually_info'=> '(Allows direct - comma separated - entry of the keywords while writing the post)',
'wp_seo_key_home'=> array(
0 => 'Default',
1 => 'Excerpt of the first post'
),
'wp_seo_key_single'=> array(
0 => 'Default',
1 => 'Excerpt of the current post',
2 => 'Tags'
),
'wp_seo_key_page'=> array(
0 => 'Default',
1 => 'Excerpt of the current post',
2 => 'Tags'
),
'wp_seo_key_category'=> array(
0 => 'Default',
1 => 'Titles of all listed posts'
),
'wp_seo_key_search'=> array(
0 => 'Default',
1 => 'Titles of all listed posts'
),
'wp_seo_key_archive'=> array(
0 => 'Default',
1 => 'Titles of all listed posts'
),
'wp_seo_key_tagging'=> array(
0 => 'Default',
1 => 'Titles of all listed posts'
),
'wp_seo_key_404'=> array(
0 => 'Default'
),
'wp_seo_misc_settings'=> 'Other Settings',
'wp_seo_misc_section'=> 'Highlight posts for Google Adsense Robot with: &lt;!-- google_ad_section ... --&gt;',
'wp_seo_misc_robots'=> 'Avoid duplicate content with &lt;meta name="robots" ... /&gt;',
'wp_seo_misc_noodp'=> 'Add the &lt;meta name="robots" content="noodp" /&gt; META tag to the source code',
'wp_seo_misc_clean'=> 'Remove HTML comments and unnecessary spaces from posts',
'wp_seo_misc_feed'=> 'Prevent indexing of RSS-Feeds by search engines',
'wp_seo_misc_attachment'=> 'Rename files during upload and use title as file name',
'wp_seo_compatibility_settings'=> 'Compatibility Check',
'wp_seo_compatibility_start'=> 'Search the source code for duplicate tags (title, description, keywords, robots)',
'wp_seo_compatibility_error'=> 'Error during reading of meta data',
'wp_seo_compatibility_details' => 'Found duplicate entries',
'wp_seo_compatibility_done'=> 'Compatibility check successfully finished',
'wp_seo_export_settings'=> 'Export Options',
'wp_seo_export_start'=> 'Generate and download file as XML',
'wp_seo_import_settings'=> 'Import Options',
'wp_seo_import_start'=> 'Read XML file and set values accordingly',
'wp_seo_import_error'=> 'Error during upload of the XML file',
'wp_seo_import_done'=> 'Options successfully imported'
);
class wpSEO {
var $groups = array(
'home',
'single',
'page',
'category',
'search',
'archive',
'tagging',
'404'
);
var $version = '2.5.1';
var $length = 0;
var $cache = array();
function wpSEO() {
if (is_admin()) {
add_action('admin_menu', array($this, 'set_admin_page'));
if (isset($_GET) === true && isset($_GET['page']) === true && strpos($_GET['page'], 'wpseo_') !== false && isset($_GET['action']) === true && $_GET['action'] == 'export') {
add_action('init', array($this, 'get_export_file'));
}
if (get_option('wp_seo_key_manually') || get_option('wp_seo_desc_manually') || get_option('wp_seo_title_manually')) {
add_action('simple_edit_form', array($this, 'show_edit_fields'));
add_action('edit_form_advanced', array($this, 'show_edit_fields'));
add_action('edit_page_form', array($this, 'show_edit_fields'));
add_action('edit_post', array($this, 'set_edit_fields'));
add_action('publish_post', array($this, 'set_edit_fields'));
add_action('save_post', array($this, 'set_edit_fields'));
add_action('edit_page_form', array($this, 'set_edit_fields'));
}
if (get_option('wp_seo_misc_attachment')) {
if (version_compare($GLOBALS['wp_version'], '2.5', '>=')) {
add_filter('attachment_fields_to_save', array($this, 'set_attachment_file'));
} else {
add_filter('wp_handle_upload', array($this, 'set_attachment_file'));
}
}
} else {
add_action('wp_head', array($this, 'show_meta_comment'));
if (get_option('wp_seo_misc_robots') || get_option('wp_seo_misc_noodp')) {
add_action('wp_head', array($this, 'show_meta_robots'));
}
if (get_option('wp_seo_desc_enable')) {
add_action('wp_head', array($this, 'show_meta_description'));
}
if (get_option('wp_seo_key_enable')) {
add_action('wp_head', array($this, 'show_meta_keywords'));
}
if (get_option('wp_seo_title_enable')) {
add_action('wp_head', array($this, 'show_meta_title'));
}
if (get_option('wp_seo_misc_feed')) {
add_action('rss_head', array($this, 'show_feed_noindex'));
add_action('rss2_head', array($this, 'show_feed_noindex'));
}
if (get_option('wp_seo_misc_clean')) {
add_filter('the_content', array($this, 'get_cleaned_data'));
add_filter('comment_text', array($this, 'get_cleaned_data'));
}
if (get_option('wp_seo_misc_section')) {
add_filter('the_content', array($this, 'get_selected_data'));
}
}
}
function get_translated_string($str) {
return @$GLOBALS['language'][$str];
}
function get_cleaned_data($data = '') {
return trim(preg_replace("/(\/\*.*?\*\/|<!--.*?-->| {2,})/", ' ', $data));
}
function get_selected_data($data = '') {
return "\n<!-- google_ad_section_start -->\n" .$data. "\n<!-- google_ad_section_end -->\n";
}
function get_category_data() {
$categs = get_the_category();
if (empty($categs) === true) {
return '';
}
foreach ($categs as $v) {
if (isset($data) === false) {
$data = $v->cat_name;
} else {
$data .= ', ' .$v->cat_name;
}
}
return $data;
}
function get_title_data() {
if (isset($GLOBALS['posts']) === false || empty($GLOBALS['posts']) === true) {
return '';
}
foreach ($GLOBALS['posts'] as $v) {
if (isset($data) === false) {
$data = $v->post_title;
} else {
$data .= ', ' .$v->post_title;
}
}
return $data;
}
function get_post_data() {
return $GLOBALS['posts'][0]->post_content;
}
function get_excerpt_data() {
return $GLOBALS['posts'][0]->post_excerpt;
}
function get_composed_data($data, $args) {
if (empty($data) === true) {
return '';
}
$data = $this->get_htmlentities_decode($data);
if ($args['labeling'] || $args['xhtml']) {
preg_match_all(
sprintf(
"#<(?:%1\$s%2\$s%3\$s)>(.*?)</(?:%4\$s%2\$s%3\$s)>#i",
($args['labeling'] ? 'span class="wpseo_keyword"' : ''),
($args['labeling'] && $args['xhtml'] ? '|' : ''),
($args['xhtml'] ? 'em|strong' : ''),
($args['labeling'] ? 'span' : '')
),
$data,
$matches,
PREG_PATTERN_ORDER
);
if (empty($matches) === false && empty($matches[1]) === false) {
$labels = $matches[1];
$labels = $this->get_strip_tags($labels);
$labels = array_map(array($this, 'get_character_filter'), $labels);
if (count($labels) >= $args['counter']) {
return $this->get_converted_data($labels, $args);
}
}
}
$data = $this->get_strip_tags($data);
$array = preg_split('/[\s"]+/', $data, -1, PREG_SPLIT_NO_EMPTY);
if ($args['character']) {
$array = array_map(array($this, 'get_character_filter'), $array);
}
if ($args['length']) {
$GLOBALS['wpSEO']->length = $args['length'];
$array = array_filter($array, array($this, 'get_length_filter'));
}
if ($args['substantive']) {
$array = array_filter($array, array($this, 'get_substantive_filter'));
}
if ($args['relevance']) {
$array = $this->get_counted_data($array);
}
if (isset($labels) === true && empty($labels) === false) {
$array = array_merge(
$labels,
$array
);
}
$array = array_unique($array);
if ($args['character'] && $blacklist = $this->get_htmlentities_decode(stripslashes(get_option('wp_seo_key_blacklist')))) {
$array = array_merge(
array_diff(
$array,
preg_split(
'/\s/',
$blacklist,
-1,
PREG_SPLIT_NO_EMPTY
)
)
);
}
if ($args['complete'] && count($array) < $args['counter'] && $default = stripslashes(get_option('wp_seo_key_default'))) {
$array = array_merge(
$array,
preg_split(
'/[\s\.\+\?\(\)\[\]\/\\,;&"\':!%~#_]+/',
$default,
-1,
PREG_SPLIT_NO_EMPTY
)
);
}
return $this->get_converted_data($array, $args);
}
function get_converted_data($array, $args) {
$array = array_slice($array, 0, $args['counter']);
$data = implode($args['separator'], $array);
return $data;
}
function get_counted_data($array) {
$ret_array = array();
foreach($array as $value) {
foreach($ret_array as $key2 => $value2) {
if (strtolower($key2) == strtolower($value)) {
$ret_array[$key2] ++;
continue 2;
}
}
$ret_array[$value] = 1;
}
arsort($ret_array);
$ret_array = array_keys($ret_array);
return $ret_array;
}
function get_substantive_filter($data) {
if (empty($data) === false && strtolower($data) != $data) {
return $data;
}
}
function get_length_filter($data) {
if (empty($data) === false && strlen($data) > $GLOBALS['wpSEO']->length) {
return $data;
}
}
function get_character_filter($data) {
return preg_replace(
'/[\.\+\?\(\)\[\]\/\\,:!%~#_"]/',
'',
$data
);
}
function get_tagging_status() {
if ((class_exists('SimpleTagging') === true && STP_IsTagView() === true) || (class_exists('UltimateTagWarriorCore') === true && is_tag() === true) || (function_exists('is_tag') === true && is_tag() === true)) {
return true;
}
return false;
}
function get_strip_tags($data) {
if (is_array($data) === true) {
return array_map(array($this, 'get_strip_tags'), $data);
} else {
$data = strtr($data, '[]', '<>');
return strip_tags($data);
}
}
function get_htmlentities_decode($data) {
$charset = get_bloginfo('charset');
if (version_compare(phpversion(), '5.0.0', '>=')) {
return html_entity_decode($data, ENT_QUOTES, $charset);
} else {
if (strtolower($charset) == 'utf-8') {
return $this->get_entity_decode_php4($data);
} else {
return html_entity_decode($data, ENT_QUOTES, $charset);
}
}
}
function get_htmlentities_encode($data, $stripslashes = false, $encode = false) {
$charset = get_bloginfo('charset');
$entity_decoded = $this->get_htmlentities_decode($data);
if (strtolower($charset) == 'utf-8' && $encode === false) {
$return = $entity_decoded;
} else {
$return = htmlentities(
$entity_decoded,
ENT_QUOTES,
$charset
);
}
return ($stripslashes === false) ? $return : stripslashes($return);
}
function get_utf8_code_php4($num) {
if ($num <= 0x7F) {
return chr($num);
} elseif ($num <= 0x7FF) {
return chr(($num >> 0x06) + 0xC0) . chr(($num & 0x3F) + 128);
} elseif ($num <= 0xFFFF) {
return chr(($num >> 0x0C) + 0xE0) . chr((($num >> 0x06) & 0x3F) + 0x80) . chr(($num & 0x3F) + 0x80);
} elseif ($num <= 0x1FFFFF) {
return chr(($num >> 0x12) + 0xF0) . chr((($num >> 0x0C) & 0x3F) + 0x80) . chr((($num >> 0x06) & 0x3F) + 0x80) . chr(($num & 0x3F) + 0x80);
}
return ' ';
}
function get_entity_decode_php4($data) {
$table = array (
'&Aacute;' => chr(195).chr(129),
'&aacute;' => chr(195).chr(161),
'&Acirc;' => chr(195).chr(130),
'&acirc;' => chr(195).chr(162),
'&acute;' => chr(194).chr(180),
'&AElig;' => chr(195).chr(134),
'&aelig;' => chr(195).chr(166),
'&Agrave;' => chr(195).chr(128),
'&agrave;' => chr(195).chr(160),
'&alefsym;' => chr(226).chr(132).chr(181),
'&Alpha;' => chr(206).chr(145),
'&alpha;' => chr(206).chr(177),
'&amp;' => chr(38),
'&and;' => chr(226).chr(136).chr(167),
'&ang;' => chr(226).chr(136).chr(160),
'&Aring;' => chr(195).chr(133),
'&aring;' => chr(195).chr(165),
'&asymp;' => chr(226).chr(137).chr(136),
'&Atilde;' => chr(195).chr(131),
'&atilde;' => chr(195).chr(163),
'&Auml;' => chr(195).chr(132),
'&auml;' => chr(195).chr(164),
'&bdquo;' => chr(226).chr(128).chr(158),
'&Beta;' => chr(206).chr(146),
'&beta;' => chr(206).chr(178),
'&brvbar;' => chr(194).chr(166),
'&bull;' => chr(226).chr(128).chr(162),
'&cap;' => chr(226).chr(136).chr(169),
'&Ccedil;' => chr(195).chr(135),
'&ccedil;' => chr(195).chr(167),
'&cedil;' => chr(194).chr(184),
'&cent;' => chr(194).chr(162),
'&Chi;' => chr(206).chr(167),
'&chi;' => chr(207).chr(135),
'&circ;' => chr(203).chr(134),
'&clubs;' => chr(226).chr(153).chr(163),
'&cong;' => chr(226).chr(137).chr(133),
'&copy;' => chr(194).chr(169),
'&crarr;' => chr(226).chr(134).chr(181),
'&cup;' => chr(226).chr(136).chr(170),
'&curren;' => chr(194).chr(164),
'&dagger;' => chr(226).chr(128).chr(160),
'&Dagger;' => chr(226).chr(128).chr(161),
'&darr;' => chr(226).chr(134).chr(147),
'&dArr;' => chr(226).chr(135).chr(147),
'&deg;' => chr(194).chr(176),
'&Delta;' => chr(206).chr(148),
'&delta;' => chr(206).chr(180),
'&diams;' => chr(226).chr(153).chr(166),
'&divide;' => chr(195).chr(183),
'&Eacute;' => chr(195).chr(137),
'&eacute;' => chr(195).chr(169),
'&Ecirc;' => chr(195).chr(138),
'&ecirc;' => chr(195).chr(170),
'&Egrave;' => chr(195).chr(136),
'&egrave;' => chr(195).chr(168),
'&empty;' => chr(226).chr(136).chr(133),
'&emsp;' => chr(226).chr(128).chr(131),
'&ensp;' => chr(226).chr(128).chr(130),
'&Epsilon;' => chr(206).chr(149),
'&epsilon;' => chr(206).chr(181),
'&equiv;' => chr(226).chr(137).chr(161),
'&Eta;' => chr(206).chr(151),
'&eta;' => chr(206).chr(183),
'&ETH;' => chr(195).chr(144),
'&eth;' => chr(195).chr(176),
'&Euml;' => chr(195).chr(139),
'&euml;' => chr(195).chr(171),
'&euro;' => chr(226).chr(130).chr(172),
'&exist;' => chr(226).chr(136).chr(131),
'&fnof;' => chr(198).chr(146),
'&forall;' => chr(226).chr(136).chr(128),
'&frac12;' => chr(194).chr(189),
'&frac14;' => chr(194).chr(188),
'&frac34;' => chr(194).chr(190),
'&frasl;' => chr(226).chr(129).chr(132),
'&Gamma;' => chr(206).chr(147),
'&gamma;' => chr(206).chr(179),
'&ge;' => chr(226).chr(137).chr(165),
'&harr;' => chr(226).chr(134).chr(148),
'&hArr;' => chr(226).chr(135).chr(148),
'&hearts;' => chr(226).chr(153).chr(165),
'&hellip;' => chr(226).chr(128).chr(166),
'&Iacute;' => chr(195).chr(141),
'&iacute;' => chr(195).chr(173),
'&Icirc;' => chr(195).chr(142),
'&icirc;' => chr(195).chr(174),
'&iexcl;' => chr(194).chr(161),
'&Igrave;' => chr(195).chr(140),
'&igrave;' => chr(195).chr(172),
'&image;' => chr(226).chr(132).chr(145),
'&infin;' => chr(226).chr(136).chr(158),
'&int;' => chr(226).chr(136).chr(171),
'&Iota;' => chr(206).chr(153),
'&iota;' => chr(206).chr(185),
'&iquest;' => chr(194).chr(191),
'&isin;' => chr(226).chr(136).chr(136),
'&Iuml;' => chr(195).chr(143),
'&iuml;' => chr(195).chr(175),
'&Kappa;' => chr(206).chr(154),
'&kappa;' => chr(206).chr(186),
'&Lambda;' => chr(206).chr(155),
'&lambda;' => chr(206).chr(187),
'&lang;' => chr(226).chr(140).chr(169),
'&laquo;' => chr(194).chr(171),
'&larr;' => chr(226).chr(134).chr(144),
'&lArr;' => chr(226).chr(135).chr(144),
'&lceil;' => chr(226).chr(140).chr(136),
'&ldquo;' => chr(226).chr(128).chr(156),
'&le;' => chr(226).chr(137).chr(164),
'&lfloor;' => chr(226).chr(140).chr(138),
'&lowast;' => chr(226).chr(136).chr(151),
'&loz;' => chr(226).chr(151).chr(138),
'&lrm;' => chr(226).chr(128).chr(142),
'&lsaquo;' => chr(226).chr(128).chr(185),
'&lsquo;' => chr(226).chr(128).chr(152),
'&macr;' => chr(194).chr(175),
'&mdash;' => chr(226).chr(128).chr(148),
'&micro;' => chr(194).chr(181),
'&middot;' => chr(194).chr(183),
'&minus;' => chr(226).chr(136).chr(146),
'&Mu;' => chr(206).chr(156),
'&mu;' => chr(206).chr(188),
'&nabla;' => chr(226).chr(136).chr(135),
'&nbsp;' => chr(194).chr(160),
'&ndash;' => chr(226).chr(128).chr(147),
'&ne;' => chr(226).chr(137).chr(160),
'&ni;' => chr(226).chr(136).chr(139),
'&not;' => chr(194).chr(172),
'&notin;' => chr(226).chr(136).chr(137),
'&nsub;' => chr(226).chr(138).chr(132),
'&Ntilde;' => chr(195).chr(145),
'&ntilde;' => chr(195).chr(177),
'&Nu;' => chr(206).chr(157),
'&nu;' => chr(206).chr(189),
'&Oacute;' => chr(195).chr(147),
'&oacute;' => chr(195).chr(179),
'&Ocirc;' => chr(195).chr(148),
'&ocirc;' => chr(195).chr(180),
'&OElig;' => chr(197).chr(146),
'&oelig;' => chr(197).chr(147),
'&Ograve;' => chr(195).chr(146),
'&ograve;' => chr(195).chr(178),
'&oline;' => chr(226).chr(128).chr(190),
'&Omega;' => chr(206).chr(169),
'&omega;' => chr(207).chr(137),
'&Omicron;' => chr(206).chr(159),
'&omicron;' => chr(206).chr(191),
'&oplus;' => chr(226).chr(138).chr(149),
'&or;' => chr(226).chr(136).chr(168),
'&ordf;' => chr(194).chr(170),
'&ordm;' => chr(194).chr(186),
'&Oslash;' => chr(195).chr(152),
'&oslash;' => chr(195).chr(184),
'&Otilde;' => chr(195).chr(149),
'&otilde;' => chr(195).chr(181),
'&otimes;' => chr(226).chr(138).chr(151),
'&Ouml;' => chr(195).chr(150),
'&ouml;' => chr(195).chr(182),
'&para;' => chr(194).chr(182),
'&part;' => chr(226).chr(136).chr(130),
'&permil;' => chr(226).chr(128).chr(176),
'&perp;' => chr(226).chr(138).chr(165),
'&Phi;' => chr(206).chr(166),
'&phi;' => chr(207).chr(134),
'&Pi;' => chr(206).chr(160),
'&pi;' => chr(207).chr(128),
'&piv;' => chr(207).chr(150),
'&plusmn;' => chr(194).chr(177),
'&pound;' => chr(194).chr(163),
'&prime;' => chr(226).chr(128).chr(178),
'&Prime;' => chr(226).chr(128).chr(179),
'&prod;' => chr(226).chr(136).chr(143),
'&prop;' => chr(226).chr(136).chr(157),
'&Psi;' => chr(206).chr(168),
'&psi;' => chr(207).chr(136),
'&radic;' => chr(226).chr(136).chr(154),
'&rang;' => chr(226).chr(140).chr(170),
'&raquo;' => chr(194).chr(187),
'&rarr;' => chr(226).chr(134).chr(146),
'&rArr;' => chr(226).chr(135).chr(146),
'&rceil;' => chr(226).chr(140).chr(137),
'&rdquo;' => chr(226).chr(128).chr(157),
'&real;' => chr(226).chr(132).chr(156),
'&reg;' => chr(194).chr(174),
'&rfloor;' => chr(226).chr(140).chr(139),
'&Rho;' => chr(206).chr(161),
'&rho;' => chr(207).chr(129),
'&rlm;' => chr(226).chr(128).chr(143),
'&rsaquo;' => chr(226).chr(128).chr(186),
'&rsquo;' => chr(226).chr(128).chr(153),
'&sbquo;' => chr(226).chr(128).chr(154),
'&Scaron;' => chr(197).chr(160),
'&scaron;' => chr(197).chr(161),
'&sdot;' => chr(226).chr(139).chr(133),
'&sect;' => chr(194).chr(167),
'&shy;' => chr(194).chr(173),
'&Sigma;' => chr(206).chr(163),
'&sigma;' => chr(207).chr(131),
'&sigmaf;' => chr(207).chr(130),
'&sim;' => chr(226).chr(136).chr(188),
'&spades;' => chr(226).chr(153).chr(160),
'&sub;' => chr(226).chr(138).chr(130),
'&sube;' => chr(226).chr(138).chr(134),
'&sum;' => chr(226).chr(136).chr(145),
'&sup1;' => chr(194).chr(185),
'&sup2;' => chr(194).chr(178),
'&sup3;' => chr(194).chr(179),
'&sup;' => chr(226).chr(138).chr(131),
'&supe;' => chr(226).chr(138).chr(135),
'&szlig;' => chr(195).chr(159),
'&Tau;' => chr(206).chr(164),
'&tau;' => chr(207).chr(132),
'&there4;' => chr(226).chr(136).chr(180),
'&Theta;' => chr(206).chr(152),
'&theta;' => chr(206).chr(184),
'&thetasym;' => chr(207).chr(145),
'&thinsp;' => chr(226).chr(128).chr(137),
'&THORN;' => chr(195).chr(158),
'&thorn;' => chr(195).chr(190),
'&tilde;' => chr(203).chr(156),
'&times;' => chr(195).chr(151),
'&trade;' => chr(226).chr(132).chr(162),
'&Uacute;' => chr(195).chr(154),
'&uacute;' => chr(195).chr(186),
'&uarr;' => chr(226).chr(134).chr(145),
'&uArr;' => chr(226).chr(135).chr(145),
'&Ucirc;' => chr(195).chr(155),
'&ucirc;' => chr(195).chr(187),
'&Ugrave;' => chr(195).chr(153),
'&ugrave;' => chr(195).chr(185),
'&uml;' => chr(194).chr(168),
'&upsih;' => chr(207).chr(146),
'&Upsilon;' => chr(206).chr(165),
'&upsilon;' => chr(207).chr(133),
'&Uuml;' => chr(195).chr(156),
'&uuml;' => chr(195).chr(188),
'&weierp;' => chr(226).chr(132).chr(152),
'&Xi;' => chr(206).chr(158),
'&xi;' => chr(206).chr(190),
'&Yacute;' => chr(195).chr(157),
'&yacute;' => chr(195).chr(189),
'&yen;' => chr(194).chr(165),
'&yuml;' => chr(195).chr(191),
'&Yuml;' => chr(197).chr(184),
'&Zeta;' => chr(206).chr(150),
'&zeta;' => chr(206).chr(182),
'&zwj;' => chr(226).chr(128).chr(141),
'&zwnj;' => chr(226).chr(128).chr(140),
'&gt;' => '>',
'&lt;' => '<'
);
$return = strtr($data, $table);
$return = preg_replace('~&#x([0-9a-f]+);~ei', '\$this->get_utf8_code_php4(hexdec("\\1"))', $return);
$return = preg_replace('~&#([0-9]+);~e', '\$this->get_utf8_code_php4(\\1)', $return);
return $return;
}
function get_plugin_version() {
if (time() - get_option('wp_seo_update_check') < 86400) {
return $this->version;
}
$xml = @file_get_contents('http://www.wpseo.de/api/info.xml');
if (!$xml) {
return $this->version;
}
preg_match('/<version>(.*)<\/version>/', $xml, $matches);
update_option('wp_seo_update_check', time());
return $matches[1];
}
function get_donate_status() {
if (!get_option('wp_seo_donate_check')) {
update_option('wp_seo_donate_check', time());
return false;
}
if ((time() - get_option('wp_seo_donate_check')) < (86400 * 15)) {
return false;
} else {
update_option('wp_seo_donate_check', time());
return true;
}
}
function get_export_file() {
$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= "\n<options>\n";
$results = $GLOBALS['wpdb']->get_results("SELECT option_name, option_value FROM " .$GLOBALS['wpdb']->options. " WHERE option_name LIKE 'wp_seo%'");
foreach ($results as $field) {
$name = $field->option_name;
$value = stripslashes($field->option_value);
if (preg_match('/^[0-9]*$/', $value)) {
$xml .= "<" .$name. ">" .$value. "</" .$name. ">\n";
} else {
$xml .= "<" .$name. "><![CDATA[" .$value. "]]></" .$name. ">\n";
}
}
$xml .= '</options>';
$this->set_download_header('wpSEO.' .date('Y-m-d'). '.xml', strlen($xml), 'text/xml');
echo $xml;
exit;
}
function get_front_page() {
return (get_option('show_on_front') == 'page' && get_option('page_on_front') == $GLOBALS['post']->ID) ? true : false;
}
function get_meta_tags_adv($url, $timeout = 3) {
if (empty($url) === true) {
return false;
}
$parsed_url = parse_url($url);
if (!$fsock = fsockopen($parsed_url['host'], 80, $errno, $errstr, $timeout)) {
return false;
}
fputs($fsock, 'GET ' .($parsed_url['path'] ? $parsed_url['path']. '/' : '/') .$parsed_url['query']. " HTTP/1.1\r\n");
fputs($fsock, 'HOST: ' .$parsed_url['host']. "\r\n");
fputs($fsock, "Connection: close\r\n\r\n");
$current = '';
$input = '';
$header = array();
$data['title'] = array();
$data['description'] = array();
$data['keywords'] = array();
$data['robots'] = array();
while (($line=trim(fgets($fsock, 1024))) != '') {
if (($pos=strpos($line, ':')) !== false ) {
$current = substr($line, 0, $pos);
$header[$current] = trim(substr($line, $pos + 1));
}
}
if (isset($header['Transfer-Encoding']) === true && $header['Transfer-Encoding'] == 'chunked') {
$chunk = hexdec(fgets($fsock, 1024));
} else {
$chunk = -1;
}
while ($chunk != 0 && !feof($fsock)) {
if ($chunk > 0) {
$part = fread($fsock, $chunk);
$chunk -= strlen($part);
$input .= $part;
if ($chunk == 0) {
if (fgets($fsock, 1024) != "\r\n") {
return false;
}
$chunk = hexdec(fgets($fsock, 1024));
}
if (strpos(strtolower($input), '</head>') !== false || substr_count($input, "\n") >= 300) {
break;
}
} else {
$input .= fread($fsock, 1024);
}
}
fclose($fsock);
preg_match_all('/<title>(.*?)<\/title>/si', $input, $matches);
$data['title'] = $matches[1];
preg_match_all('/description[\'"] content=[\'"](.*?)[\'"]/si', $input, $matches);
$data['description'] = $matches[1];
preg_match_all('/keywords[\'"] content=[\'"](.*?)[\'"]/si', $input, $matches);
$data['keywords'] = $matches[1];
preg_match_all('/robots[\'"] content=[\'"](.*?)[\'"]/si', $input, $matches);
$data['robots'] = $matches[1];
return $data;
}
function get_compatibility_check() {
if (!$data = $this->get_meta_tags_adv(get_bloginfo('url'))) {
return $this->get_translated_string('wp_seo_compatibility_error');
}
$errors = array();
$counts = array();
foreach (array('title', 'description', 'keywords', 'robots') as $key) {
$counts[$key] = count($data[$key]);
if ($counts[$key] > 1) {
$errors[] = $counts[$key]. ' x ' .$key;
}
}
if (empty($errors) === false) {
return sprintf(
$this->get_translated_string('wp_seo_compatibility_details'). ': %s',
implode(
', ',
$errors
)
);
}
return true;
}
function get_post_tags() {
switch (true) {
case class_exists('SimpleTagging'):
return STP_GetMetaKeywords();
case class_exists('UltimateTagWarriorCore'):
return $GLOBALS['utw']->FormatTags(
$GLOBALS['utw']->GetTagsForPost($GLOBALS['posts'][0]->ID),
array(
'first' => '%tagdisplay%',
'default' => ', %tagdisplay%'
)
);
case function_exists('the_tags'):
return $this->get_wp_tags(', ');
case class_exists('SimpleTags'):
return $GLOBALS['simple_tags']->generateKeywords();
default:
return '';
}
}
function get_current_tagset() {
switch (true) {
case class_exists('SimpleTagging'):
return STP_GetCurrentTagSet();
case class_exists('UltimateTagWarriorCore'):
return $GLOBALS['utw']->FormatTags(
$GLOBALS['utw']->GetCurrentTagSet(),
$GLOBALS['utw']->GetFormat(
'tagsettextonly',
''
),
0
);
default:
return wp_title('', false);
}
}
function get_wp_tags($separator) {
$return = array();
if (function_exists('get_the_tags') === false) {
return false;
}
if ($tags = get_the_tags($GLOBALS['post']->ID)) {
foreach ($tags as $tag) {
$return[] = $tag->name;
}
return ($separator) ? implode($separator, $return) : $return;
} else {
return '';
}
}
function set_admin_page() {
$this->set_default_settings();
add_options_page('wpSEO-Plugin', 'wpSEO', 9, __FILE__, array($this, 'show_admin_page'));
}
function set_default_settings() {
$args_array = array(
'wp_seo_update_check'=> 0,
'wp_seo_donate_check'=> 0,
'wp_seo_title_enable'=> 0,
'wp_seo_title_separator' => '&raquo;',
'wp_seo_title_number'=> 0,
'wp_seo_title_author'=> 0,
'wp_seo_desc_enable'=> 0,
'wp_seo_desc_default'=> '',
'wp_seo_desc_counter'=> 20,
'wp_seo_key_enable'=> 0,
'wp_seo_key_default'=> '',
'wp_seo_key_counter'=> 10,
'wp_seo_key_length'=> 3,
'wp_seo_key_blacklist'=> '',
'wp_seo_key_complete'=> 0,
'wp_seo_key_substantive' => 0,
'wp_seo_key_relevance'=> 0,
'wp_seo_key_labeling'=> 0,
'wp_seo_key_xhtml'=> 0,
'wp_seo_key_manually'=> 0,
'wp_seo_desc_manually'=> 0,
'wp_seo_title_manually'=> 0,
'wp_seo_misc_section'=> 0,
'wp_seo_misc_robots'=> 0,
'wp_seo_misc_noodp'=> 0,
'wp_seo_misc_clean'=> 0,
'wp_seo_misc_feed'=> 0,
'wp_seo_misc_attachment' => 0
);
foreach ($this->groups as $k) {
$args_array['wp_seo_title_channel_' .$k] = ($k == 'home' ? '%title% %clip% %blog%' : ($k == 'tagging' ? '%tag% %clip% %area% %clip% %blog%' : ($k == '404' ? '%area% %clip% %blog%' : '%title% %clip% %area% %clip% %blog%')));
$args_array['wp_seo_title_desc_' .$k] = $this->get_translated_string('wp_seo_' .$k);
$args_array['wp_seo_desc_' .$k] = 0;
$args_array['wp_seo_key_' .$k] = 0;
}
foreach ($args_array as $k => $v) {
add_option($k, $v);
}
}
function set_user_settings() {
if (isset($_POST['wp_seo_title_enable']) === true && empty($_POST['wp_seo_title_enable']) === false) {
update_option('wp_seo_title_enable', 1);
update_option('wp_seo_title_separator', (empty($_POST['wp_seo_title_separator']) === true) ? '&raquo;' : $this->get_htmlentities_decode($_POST['wp_seo_title_separator']));
update_option('wp_seo_title_number', $_POST['wp_seo_title_number']);
update_option('wp_seo_title_author', $_POST['wp_seo_title_author']);
update_option('wp_seo_title_manually', $_POST['wp_seo_title_manually']);
foreach ($this->groups as $k) {
update_option('wp_seo_title_channel_' .$k, $_POST['wp_seo_title_channel_' .$k]);
update_option('wp_seo_title_desc_' .$k, $this->get_htmlentities_decode($_POST['wp_seo_title_desc_' .$k]));
}
} else if (isset($_POST['action']) === true) {
update_option('wp_seo_title_enable', 0);
}
if (isset($_POST['wp_seo_desc_enable']) === true && empty($_POST['wp_seo_desc_enable']) === false) {
update_option('wp_seo_desc_enable', 1);
update_option('wp_seo_desc_default', $this->get_htmlentities_decode($_POST['wp_seo_desc_default']));
update_option('wp_seo_desc_counter', $_POST['wp_seo_desc_counter']);
update_option('wp_seo_desc_manually', $_POST['wp_seo_desc_manually']);
foreach ($this->groups as $k) {
update_option('wp_seo_desc_' .$k, $_POST['wp_seo_desc_' .$k]);
}
} else if (isset($_POST['action']) === true) {
update_option('wp_seo_desc_enable', 0);
}
if (isset($_POST['wp_seo_key_enable']) === true && empty($_POST['wp_seo_key_enable']) === false) {
update_option('wp_seo_key_enable', 1);
update_option('wp_seo_key_default', $this->get_htmlentities_decode($_POST['wp_seo_key_default']));
update_option('wp_seo_key_blacklist', $this->get_htmlentities_decode($_POST['wp_seo_key_blacklist']));
update_option('wp_seo_key_complete', $_POST['wp_seo_key_complete']);
update_option('wp_seo_key_substantive', $_POST['wp_seo_key_substantive']);
update_option('wp_seo_key_relevance', $_POST['wp_seo_key_relevance']);
update_option('wp_seo_key_labeling', $_POST['wp_seo_key_labeling']);
update_option('wp_seo_key_xhtml', $_POST['wp_seo_key_xhtml']);
update_option('wp_seo_key_manually', $_POST['wp_seo_key_manually']);
update_option('wp_seo_key_counter', $_POST['wp_seo_key_counter']);
update_option('wp_seo_key_length', $_POST['wp_seo_key_length']);
foreach ($this->groups as $k) {
update_option('wp_seo_key_' .$k, $_POST['wp_seo_key_' .$k]);
}
} else if (isset($_POST['action']) === true) {
update_option('wp_seo_key_enable', 0);
}
update_option('wp_seo_misc_section', $_POST['wp_seo_misc_section']);
update_option('wp_seo_misc_robots', $_POST['wp_seo_misc_robots']);
update_option('wp_seo_misc_noodp', $_POST['wp_seo_misc_noodp']);
update_option('wp_seo_misc_clean', $_POST['wp_seo_misc_clean']);
update_option('wp_seo_misc_feed', $_POST['wp_seo_misc_feed']);
update_option('wp_seo_misc_attachment', $_POST['wp_seo_misc_attachment']);
}
function set_download_header($filename, $filesize, $filetype) {
@ob_end_clean();
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename=' .$filename);
header('Content-Length: ' .$filesize);
header('Content-type: ' .$filetype. '; charset=' .get_option('blog_charset'), true);
}
function set_import_options($file) {
$data = str_replace(
array(
'<![CDATA[',
']]>'
),
'',
file_get_contents($file)
);
preg_match_all(
'/<(.*?)>(.*?)<\/.*?>/',
$data,
$matches
);
for ($i = 0; $i < count($matches[1]); $i ++) {
$option_name = $matches[1][$i];
$option_value = $matches[2][$i];
if (strpos($option_name, 'wp_seo') !== false) {
update_option($option_name, $option_value);
}
}
}
function set_edit_fields($id) {
delete_post_meta($id, 'description');
delete_post_meta($id, 'keywords');
delete_post_meta($id, 'title');
delete_post_meta($id, 'only');
if (isset($_POST['wp_seo_edit_description']) === true) {
add_post_meta($id, 'description', $_POST['wp_seo_edit_description']);
}
if (isset($_POST['wp_seo_edit_keywords']) === true) {
add_post_meta($id, 'keywords', $_POST['wp_seo_edit_keywords']);
}
if (isset($_POST['wp_seo_edit_title']) === true) {
add_post_meta($id, 'title', $_POST['wp_seo_edit_title']);
}
if (isset($_POST['wp_seo_edit_only']) === true) {
add_post_meta($id, 'only', $_POST['wp_seo_edit_only']);
}
}
function set_attachment_file($data) {
if (empty($data) === true) {
return $data;
}
$title = strtolower(trim($data['post_title']));
if (empty($title) === true) {
return $data;
}
$title = strtr(
$title,
array(
'œ' => 'oe',
'à' => 'a',
'ô' => 'o',
'ď' => 'd',
'ḟ' => 'f',
'ë' => 'e',
'š' => 's',
'ơ' => 'o',
'ß' => 'ss',
'ă' => 'a',
'ř' => 'r',
'ț' => 't',
'ň' => 'n',
'ā' => 'a',
'ķ' => 'k',
'ŝ' => 's',
'ỳ' => 'y',
'ņ' => 'n',
'ĺ' => 'l',
'ħ' => 'h',
'ṗ' => 'p',
'ó' => 'o',
'ú' => 'u',
'ě' => 'e',
'é' => 'e',
'ç' => 'c',
'ẁ' => 'w',
'ċ' => 'c',
'õ' => 'o',
'ṡ' => 's',
'ø' => 'o',
'ģ' => 'g',
'ŧ' => 't',
'ș' => 's',
'ė' => 'e',
'ĉ' => 'c',
'ś' => 's',
'î' => 'i',
'ű' => 'u',
'ć' => 'c',
'ę' => 'e',
'ŵ' => 'w',
'ṫ' => 't',
'ū' => 'u',
'č' => 'c',
'ö' => 'oe',
'è' => 'e',
'ŷ' => 'y',
'ą' => 'a',
'ł' => 'l',
'ų' => 'u',
'ů' => 'u',
'ş' => 's',
'ğ' => 'g',
'ļ' => 'l',
'ƒ' => 'f',
'ž' => 'z',
'ẃ' => 'w',
'ḃ' => 'b',
'å' => 'a',
'ì' => 'i',
'ï' => 'i',
'ḋ' => 'd',
'ť' => 't',
'ŗ' => 'r',
'ä' => 'ae',
'í' => 'i',
'ŕ' => 'r',
'ê' => 'e',
'ü' => 'ue',
'ò' => 'o',
'ē' => 'e',
'ñ' => 'n',
'ń' => 'n',
'ĥ' => 'h',
'ĝ' => 'g',
'đ' => 'd',
'ĵ' => 'j',
'ÿ' => 'y',
'ũ' => 'u',
'ŭ' => 'u',
'ư' => 'u',
'ţ' => 't',
'ý' => 'y',
'ő' => 'o',
'â' => 'a',
'ľ' => 'l',
'ẅ' => 'w',
'ż' => 'z',
'ī' => 'i',
'ã' => 'a',
'ġ' => 'g',
'ṁ' => 'm',
'ō' => 'o',
'ĩ' => 'i',
'ù' => 'u',
'į' => 'i',
'ź' => 'z',
'á' => 'a',
'û' => 'u',
'þ' => 'th',
'ð' => 'dh',
'æ' => 'ae',
'µ' => 'u',
'ĕ' => 'e',
'а' => 'a',
'б' => 'b',
'в' => 'v',
'г' => 'g',
'д' => 'd',
'е' => 'e',
'ё' => 'jo',
'ж' => 'zh',
'з' => 'z',
'и' => 'i',
'й' => 'j',
'к' => 'k',
'л' => 'l',
'м' => 'm',
'н' => 'n',
'о' => 'o',
'п' => 'p',
'р' => 'r',
'с' => 's',
'т' => 't',
'у' => 'u',
'ф' => 'f',
'х' => 'x',
'ц' => 'c',
'ч' => 'ch',
'ш' => 'sh',
'щ' => 'sch',
'ъ' => '',
'Ъ' => '',
'ы' => 'y',
'ь' => '',
'Ь' => '',
'э' => 'eh',
'ю' => 'ju',
'я' => 'ja'
)
);
$title = sanitize_title_with_dashes($title);
$title = substr($title, 0, 50);
if (empty($title) === true) {
return $data;
}
if (version_compare($GLOBALS['wp_version'], '2.5', '>=')) {
$metadata = wp_get_attachment_metadata($data['ID'], true);
$oldfile = $metadata['file'];
$url = $data['guid'];
} else if (isset($data['file']) === true && empty($data['file']) === false) {
$oldfile = $data['file'];
$type = $data['type'];
$url = $data['url'];
} else {
return $data;
}
$infodata = pathinfo($oldfile);
$newname = sprintf(
'%s.%s',
$title,
$infodata['extension']
);
$newfile = sprintf(
'%s/%s',
$infodata['dirname'],
$newname
);
if (file_exists($newfile) === true) {
$newname = sprintf(
'%s-%s.%s',
$title,
time(),
$infodata['extension']
);
$newfile = sprintf(
'%s/%s',
$infodata['dirname'],
$newname
);
}
if (@rename($oldfile, $newfile)) {
if (version_compare($GLOBALS['wp_version'], '2.5', '>=')) {
$data = array_merge(
$data,
array(
'guid' => dirname($url). '/' .$newname
)
);
wp_update_attachment_metadata(
$data['ID'],
array_merge(
$metadata,
array(
'file' => $newfile
)
)
);
} else {
$data = array(
'file' => $newfile,
'url'=> dirname($url). '/' .$newfile,
'type' => $type
);
}
}
return $data;
}
function show_meta_comment() {
echo "\n\n" .sprintf(
base64_decode('PCEtLSBUaGlzIHNpdGUgaXMgU0VPIG9wdGltaXplZCBieSB3cFNFTyAlcyAoaHR0cDovL3d3dy53cHNlby5vcmcpIC0tPg=='),
$this->version
). "\n";
}
function show_meta_robots() {
$content = '';
if (get_option('wp_seo_misc_robots')) {
$content = sprintf(
'%s, follow',
(((is_home() || is_single() || is_page()) && !is_paged()) ? 'index' : 'noindex')
);
}
if (get_option('wp_seo_misc_noodp')) {
if (empty($content) === false) {
$content .= ', ';
}
$content .= 'noodp';
}
echo '<meta name="robots" content="' .$content. '" />'. "\n";
}
function show_meta_description() {
$desc = '';
$default = stripslashes(get_option('wp_seo_desc_default'));
$attr = array(
'substantive' => false,
'separator'=> ' ',
'counter'=> get_option('wp_seo_desc_counter'),
'length'=> false,
'character'=> false,
'relevance'=> false,
'complete'=> false,
'labeling'=> false,
'xhtml'=> false
);
if (get_option('wp_seo_desc_manually') && (is_single() || is_page() || $this->get_front_page())){
$desc = get_post_meta($GLOBALS['post']->ID, 'description', true);
}
if (is_home()) {
if (empty($desc) === true) {
switch (get_option('wp_seo_desc_home')) {
case 1:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['home']['post'] = $this->get_post_data(),
$attr
);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['home']['title'] = $this->get_title_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
}
} else if (is_single()) {
if (empty($desc) === true) {
switch (get_option('wp_seo_desc_single')) {
case 1:
$desc = wp_title('', false);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['single']['post'] = $this->get_post_data(),
$attr
);
break;
case 3:
$excerpt = $this->get_excerpt_data();
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['single']['post'] = (empty($excerpt) === false ? $excerpt : $this->get_post_data()),
$attr
);
break;
default:
$desc = $default;
break;
}
}
} else if (is_page() || $this->get_front_page()) {
if (empty($desc) === true) {
switch (get_option('wp_seo_desc_page')) {
case 1:
$desc = wp_title('', false);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['page']['post'] = $this->get_post_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
}
} else if (is_category()) {
switch (get_option('wp_seo_desc_category')) {
case 1:
$desc = category_description();
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['category']['title'] = $this->get_title_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
} else if (is_search()) {
switch (get_option('wp_seo_desc_search')) {
case 1:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['search']['post'] = $this->get_post_data(),
$attr
);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['search']['title'] = $this->get_title_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
} else if (is_day() || is_month() || is_year()) {
switch (get_option('wp_seo_desc_archive')) {
case 1:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['archive']['post'] = $this->get_post_data(),
$attr
);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['archive']['title'] = $this->get_title_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
} else if ($this->get_tagging_status()) {
switch (get_option('wp_seo_desc_tagging')) {
case 1:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['tagging']['post'] = $this->get_post_data(),
$attr
);
break;
case 2:
$desc = $this->get_composed_data(
$GLOBALS['wpSEO']->cache['tagging']['title'] = $this->get_title_data(),
$attr
);
break;
default:
$desc = $default;
break;
}
} else {
$desc = $default;
}
if (empty($desc) === true) {
return false;
}
$desc = $this->get_htmlentities_encode($desc);
$desc = trim($desc);
echo sprintf(
'<meta name="description" content="%s" />',
$desc
). "\n";
}
function show_meta_keywords() {
$key = '';
$default = stripslashes(get_option('wp_seo_key_default'));
$attr = array(
'substantive' => get_option('wp_seo_key_substantive'),
'separator'=> ', ',
'counter'=> get_option('wp_seo_key_counter'),
'length'=> get_option('wp_seo_key_length'),
'character'=> true,
'relevance'=> get_option('wp_seo_key_relevance'),
'complete'=> get_option('wp_seo_key_complete'),
'labeling'=> (is_category() || is_search() || is_day() || is_month() || is_year() || $this->get_tagging_status() ? false : get_option('wp_seo_key_labeling')),
'xhtml'=> (is_category() || is_search() || is_day() || is_month() || is_year() || $this->get_tagging_status() ? false : get_option('wp_seo_key_xhtml'))
);
if (get_option('wp_seo_key_manually') && (is_single() || is_page() || $this->get_front_page())){
$key = get_post_meta($GLOBALS['post']->ID, 'keywords', true);
}
if (is_home()) {
if (empty($key) === true) {
switch (get_option('wp_seo_key_home')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['home']['post']) === true ? $GLOBALS['wpSEO']->cache['home']['post'] : $this->get_post_data()),
$attr
);
break;
default:
$key = $default;
break;
}
}
} else if (is_single()) {
if (empty($key) === true) {
switch (get_option('wp_seo_key_single')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['single']['post']) === true ? $GLOBALS['wpSEO']->cache['single']['post'] : $this->get_post_data()),
$attr
);
break;
case 2:
$key = $this->get_post_tags();
break;
default:
$key = $default;
break;
}
}
} else if (is_page() || $this->get_front_page()) {
if (empty($key) === true) {
switch (get_option('wp_seo_key_page')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['page']['post']) === true ? $GLOBALS['wpSEO']->cache['page']['post'] : $this->get_post_data()),
$attr
);
break;
case 2:
$key = $this->get_post_tags();
break;
default:
$key = $default;
break;
}
}
} else if (is_category()) {
switch (get_option('wp_seo_key_category')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['category']['title']) === true ? $GLOBALS['wpSEO']->cache['category']['title'] : $this->get_title_data()),
$attr
);
break;
default:
$key = $default;
break;
}
} else if (is_search()) {
switch (get_option('wp_seo_key_search')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['search']['title']) === true ? $GLOBALS['wpSEO']->cache['search']['title'] : $this->get_title_data()),
$attr
);
break;
default:
$key = $default;
break;
}
} else if (is_day() || is_month() || is_year()) {
switch (get_option('wp_seo_key_archive')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['archive']['title']) === true ? $GLOBALS['wpSEO']->cache['archive']['title'] : $this->get_title_data()),
$attr
);
break;
default:
$key = $default;
break;
}
} else if ($this->get_tagging_status()) {
switch (get_option('wp_seo_key_tagging')) {
case 1:
$key = $this->get_composed_data(
(isset($GLOBALS['wpSEO']->cache['tagging']['title']) === true ? $GLOBALS['wpSEO']->cache['tagging']['title'] : $this->get_title_data()),
$attr
);
break;
default:
$key = $default;
break;
}
} else {
$key = $default;
}
if (empty($key) === true) {
return false;
}
$key = $this->get_htmlentities_encode($key);
$GLOBALS['wpSEO']->cache['keywords'] = $key = trim($key);
echo sprintf(
'<meta name="keywords" content="%s" />',
$key
). "\n";
}
function show_meta_title() {
$title = '';
$separator = stripslashes(get_option('wp_seo_title_separator'));
$separator = empty($separator) === false ? $separator : '&raquo;';
$wp_title = trim(wp_title('', false));
$wp_title = (empty($wp_title) === true) ? get_bloginfo('description') : $wp_title;
if (get_option('wp_seo_title_manually') && (is_single() || is_page() || $this->get_front_page()) && $tmp_title = stripslashes(get_post_meta($GLOBALS['post']->ID, 'title', true))) {
if (get_post_meta($GLOBALS['post']->ID, 'only', true)) {
$title = $tmp_title;
} else {
$wp_title = $tmp_title;
}
}
if (empty($title) === true) {
if (get_option('wp_seo_title_number') && is_paged()) {
if (empty($wp_title) === true) {
$wp_title = sprintf('%s %s', $this->get_translated_string('wp_seo_page'), $GLOBALS['paged']);
} else {
$wp_title .= sprintf(' %s %s %s', $separator, $this->get_translated_string('wp_seo_page'), $GLOBALS['paged']);
}
}
if (get_option('wp_seo_title_author') && (is_single() || is_page())) {
$user_info = get_userdata($GLOBALS['posts'][0]->post_author);
$wp_title .= sprintf(' %s %s %s', $separator, ucfirst($this->get_translated_string('wp_seo_by')), $user_info->display_name); 
}
if (is_home()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_home')),
$wp_title
),
get_option('wp_seo_title_channel_home')
);
} else if (is_single()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_single')),
$wp_title
),
get_option('wp_seo_title_channel_single')
);
} else if (is_page() || $this->get_front_page()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_page')),
$wp_title
),
get_option('wp_seo_title_channel_page')
);
} elseif (is_category()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_category')),
$wp_title
),
get_option('wp_seo_title_channel_category')
);
} else if (is_search()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_search')),
wp_specialchars($_REQUEST['s'], 1)
),
get_option('wp_seo_title_channel_search')
);
} else if (is_day() || is_month() || is_year()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_archive')),
$wp_title
),
get_option('wp_seo_title_channel_archive')
);
} else if ($this->get_tagging_status()) {
$title = str_replace(
array(
'%area%',
'%tag%'
),
array(
stripslashes(get_option('wp_seo_title_desc_tagging')),
$this->get_current_tagset()
),
get_option('wp_seo_title_channel_tagging')
);
} else if (is_404()) {
$title = str_replace(
array(
'%area%',
'%title%'
),
array(
stripslashes(get_option('wp_seo_title_desc_404')),
$wp_title
),
get_option('wp_seo_title_channel_404')
);
} else {
$title = str_replace(
array(
'%title%'
),
array(
$wp_title ? $wp_title : get_bloginfo('description')
),
get_option('wp_seo_title_channel_home')
);
}
}
$replace = array();
if (strpos($title, '%blog%') !== false) {
$replace['%blog%'] = get_bloginfo('name');
}
if (strpos($title, '%clip%') !== false) {
$replace['%clip%'] = $separator;
}
if (strpos($title, '%keywords%') !== false) {
$replace['%keywords%'] = $GLOBALS['wpSEO']->cache['keywords'];
}
if (strpos($title, '%category%') !== false) {
$replace['%category%'] = $this->get_category_data();
}
if (empty($replace) === false) {
$title = str_replace(
array_keys($replace),
array_values($replace),
$title
);
}
$separator = '\\' .$separator;
$title = preg_replace('/(^\s*' .$separator. '\s*' .$separator. '|\s*' .$separator. '\s*' .$separator. '\s*$|^\s*' .$separator. '|' .$separator. '$|%area% ' .$separator. ')/', '', $title);
$title = $this->get_htmlentities_encode($title);
$title = trim($title);
echo sprintf(
"<title>%s</title>\n",
$title
);
}
function show_feed_noindex() {
echo '<xhtml:meta xmlns:xhtml="http://www.w3.org/1999/xhtml" name="robots" content="noindex" />' . "\n";
}
function show_edit_fields() { ?>
<div id="wp_seo_edit" style="margin: 0 0 10px">
<?php if (get_option('wp_seo_title_manually')) { ?>
<fieldset>
<legend><?php echo $this->get_translated_string('wp_seo_title_manually') ?></legend>
<div><input name="wp_seo_edit_title" type="text" size="30" id="wp_seo_edit_title" value="<?php echo $this->get_htmlentities_encode(get_post_meta($GLOBALS['post']->ID, 'title', true), true, true) ?>" style="width: 98%" /></div>
<div><input name="wp_seo_edit_only" type="checkbox" id="wp_seo_edit_only" value="1" <?php echo get_post_meta($GLOBALS['post']->ID, 'only', true) ? 'checked' : '' ?> /> <?php echo $this->get_translated_string('wp_seo_title_manually_only') ?></div>
</fieldset>
<?php }
if (get_option('wp_seo_desc_manually')) { ?>
<fieldset>
<legend><?php echo $this->get_translated_string('wp_seo_desc_manually') ?></legend>
<div><input name="wp_seo_edit_description" type="text" size="30" id="wp_seo_edit_description" value="<?php echo $this->get_htmlentities_encode(get_post_meta($GLOBALS['post']->ID, 'description', true), true, true) ?>" style="width: 98%" /></div>
</fieldset>
<?php }
if (get_option('wp_seo_key_manually')) { ?>
<fieldset>
<legend><?php echo $this->get_translated_string('wp_seo_key_manually') ?></legend>
<div><input name="wp_seo_edit_keywords" type="text" size="30" id="wp_seo_edit_keywords" value="<?php echo $this->get_htmlentities_encode(get_post_meta($GLOBALS['post']->ID, 'keywords', true), true, true) ?>" style="width: 98%" /></div>
</fieldset>
<?php } ?>
</div>
<?php }
function show_admin_page() {
if (isset($_FILES) === true && empty($_FILES) === false) {
if ($_FILES['xml']['error'] || !$_FILES['xml']['size']) { ?>
<div id="message" class="error">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_import_error') ?>
</strong>
</p>
</div>
<?php } else {
$this->set_import_options($_FILES['xml']['tmp_name']);
 ?>
<div id="message" class="updated fade">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_import_done') ?>
</strong>
</p>
</div>
<?php }
} else if (isset($_POST) === true && isset($_POST['action']) === true) {
$this->set_user_settings();
 ?>
<div id="message" class="updated fade">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_update_done') ?>
</strong>
</p>
</div>
<?php } else if ($this->version != $this->get_plugin_version()) { ?>
<div id="message" class="error">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_update_available') ?>
</strong>
</p>
</div>
<?php } else if ($this->get_donate_status() === true) { ?>
<div id="message" class="error">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_please_donate') ?>
</strong>
</p>
</div>
<?php } else if (isset($_GET) === true && isset($_GET['action']) === true && $_GET['action'] == 'compatibility') {
$status = $this->get_compatibility_check();
if ($status === true) { ?>
<div id="message" class="updated fade">
<p>
<strong>
<?php echo $this->get_translated_string('wp_seo_compatibility_done') ?>
</strong>
</p>
</div>
<?php 
} else { ?>
<div id="message" class="error">
<p>
<strong>
<?php echo $status ?>
</strong>
</p>
</div>
<?php }
} ?>
<style type="text/css">
.wrap ul {
clear: both;
margin: 0;
padding: 10px 0 0 20px;
}
.wrap ul li {
clear: both;
list-style: none;
}
.wrap ul li div {
float: left;
}
.wrap ul li .left {
width: 150px;
margin: 3px 0 0;
}
.wrap input.text {
width: 400px;
}
.wrap select {
width: 408px;
height: 22px;
}
.wrap textarea {
width: 400px;
height: 50px;
}
.wrap fieldset {
clear: both;
}
.wrap .helper {
float: right;
}
.wrap .options {
margin-top: 30px;
}
</style>
<script type="text/javascript">
function enable_options(area, status) {
var i = 0, name;
var form = document.wp_seo_form;
for (i; i < form.length; i ++) {
name = form.elements[i].name;
if (name && name != 'wp_seo_' + area + '_enable' && name.lastIndexOf('wp_seo_' + area) != -1) {
form.elements[i].disabled = status ? false : true;
}
}
eval('form.wp_seo_' + area + '_enable').checked = status;
}
</script>
<div class="wrap">
<h2>
<?php echo $this->get_translated_string('wp_seo_page_teaser') ?>
</h2>
<p class="helper">
<?php echo $this->get_translated_string('wp_seo_license') ?>
<br />
<?php echo $this->get_translated_string('wp_seo_donate') ?>
<br />
<?php echo $this->get_translated_string('wp_seo_website') ?> | <?php echo $this->get_translated_string('wp_seo_manual') ?> | <?php echo $this->get_translated_string('wp_seo_support') ?>
</p>
<form name="wp_seo_form" action="" method="post">
<input type="hidden" name="action" value="edit" />
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_title_convert') ?>
</legend>
<label for="wp_seo_title_enable">
<input type="checkbox" name="wp_seo_title_enable" id="wp_seo_title_enable" value="1" onchange="enable_options('title', this.checked)" />
<?php echo $this->get_translated_string('wp_seo_title_enable') ?>
</label>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_format') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_format_info') ?></small>
</li>
<?php foreach ($this->groups as $k) { ?>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_' .$k) ?>
</div>
<div>
<select name="wp_seo_title_channel_<?php echo $k ?>" disabled="disabled">
<?php foreach ($this->get_translated_string('wp_seo_title_channel') as $key => $value) {
if (($k != 'single' && strpos($key, '%category%') !== false) || ($k == 'tagging' && strpos($key, '%tag%') === false) || ($k != 'tagging' && strpos($key, '%tag%') !== false) || ($k == '404' && strpos($key, '%keywords%') !== false)) {
continue;
} ?>
<option value="<?php echo $key ?>"<?php echo ($key == get_option('wp_seo_title_channel_' .$k)) ? ' selected="selected"' : '' ?>><?php echo $value ?></option>
<?php } ?>
</select>
</div>
</li>
<?php } ?>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_separator') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_separator_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_title_separator') ?>
</div>
<div>
<input type="text" name="wp_seo_title_separator" class="text" disabled="disabled" value="<?php echo $this->get_htmlentities_encode(get_option('wp_seo_title_separator'), true, true) ?>" />
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_description') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_description_info') ?></small>
</li>
<?php foreach ($this->groups as $k) { ?>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_' .$k) ?>
</div>
<div>
<input type="text" name="wp_seo_title_desc_<?php echo $k ?>" class="text" disabled="disabled" value="<?php echo $this->get_htmlentities_encode(get_option('wp_seo_title_desc_' .$k), true, true) ?>" />
</div>
</li>
<?php } ?>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_count') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_count_info') ?></small>
</li>
<li>
<label for="wp_seo_title_number">
<input type="checkbox" name="wp_seo_title_number" id="wp_seo_title_number" value="1"<?php echo (get_option('wp_seo_title_number')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_title_count_view') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_author') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_author_info') ?></small>
</li>
<li>
<label for="wp_seo_title_author">
<input type="checkbox" name="wp_seo_title_author" id="wp_seo_title_author" value="1"<?php echo (get_option('wp_seo_title_author')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_title_author_view') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_title_manually') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_title_manually_info') ?></small>
</li>
<li>
<label for="wp_seo_title_manually">
<input type="checkbox" name="wp_seo_title_manually" id="wp_seo_title_manually" value="1"<?php echo (get_option('wp_seo_title_manually')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_title_manually_on') ?>
</label>
</li>
</ul>
</fieldset>
<p class="submit">
<input type="submit" value="<?php echo $this->get_translated_string('wp_seo_update') ?> &raquo;" />
</p>
<?php if (get_option('wp_seo_title_enable')) { ?>
<script type="text/javascript">
enable_options('title', true);
</script>
<?php } ?>
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_desc_convert') ?>
</legend>
<label for="wp_seo_desc_enable">
<input type="checkbox" name="wp_seo_desc_enable" id="wp_seo_desc_enable" value="1" onchange="enable_options('desc', this.checked)" />
<?php echo $this->get_translated_string('wp_seo_desc_enable') ?>
</label>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_desc_default') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_desc_default_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_desc_default') ?>
</div>
<div>
<input type="text" name="wp_seo_desc_default" class="text" disabled="disabled" value="<?php echo $this->get_htmlentities_encode(get_option('wp_seo_desc_default'), true, true) ?>" />
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_desc_dynamic') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_desc_dynamic_info') ?></small>
</li>
<?php foreach ($this->groups as $key) { ?>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_' .$key) ?>
</div>
<div>
<select name="wp_seo_desc_<?php echo $key ?>" disabled="disabled">
<?php foreach ($this->get_translated_string('wp_seo_desc_' .$key) as $k => $v) { ?>
<option value="<?php echo $k ?>"<?php echo ($k == get_option('wp_seo_desc_' .$key)) ? ' selected="selected"' : '' ?>><?php echo $v ?></option>
<?php } ?>
</select>
</div>
</li>
<?php } ?>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_desc_counter') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_desc_counter_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_desc_counter') ?>
</div>
<div>
<select name="wp_seo_desc_counter" disabled="disabled">
<?php for ($k = 5; $k <= 50; $k = $k + 5) { ?>
<option value="<?php echo $k ?>"<?php echo ($k == get_option('wp_seo_desc_counter')) ? ' selected="selected"' : '' ?>><?php echo $k ?></option>
<?php } ?>
</select>
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_desc_manually') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_desc_manually_info') ?></small>
</li>
<li>
<label for="wp_seo_desc_manually">
<input type="checkbox" name="wp_seo_desc_manually" id="wp_seo_desc_manually" value="1"<?php echo (get_option('wp_seo_desc_manually')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_desc_manually_on') ?>
</label>
</li>
</ul>
</fieldset>
<p class="submit">
<input type="submit" value="<?php echo $this->get_translated_string('wp_seo_update') ?> &raquo;" />
</p>
<?php if (get_option('wp_seo_desc_enable')) { ?>
<script type="text/javascript">
enable_options('desc', true);
</script>
<?php } ?>
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_key_convert') ?>
</legend>
<label for="wp_seo_key_enable">
<input type="checkbox" name="wp_seo_key_enable" id="wp_seo_key_enable" value="1" onchange="enable_options('key', this.checked)" />
<?php echo $this->get_translated_string('wp_seo_key_enable') ?>
</label>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_default') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_default_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_key_default') ?>
</div>
<div>
<input type="text" name="wp_seo_key_default" class="text" disabled="disabled" value="<?php echo $this->get_htmlentities_encode(get_option('wp_seo_key_default'), true, true) ?>" />
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_dynamic') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_dynamic_info') ?></small>
</li>
<?php foreach ($this->groups as $key) { ?>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_' .$key) ?>
</div>
<div>
<select name="wp_seo_key_<?php echo $key ?>" disabled="disabled">
<?php foreach ($this->get_translated_string('wp_seo_key_' .$key) as $k => $v) {
$warn = ($key == 'single' && $k == 2 && get_option('meta_autoheader')) ? (' (' .$this->get_translated_string('wp_seo_key_dynamic_warn'). ')') : '' ?>
<option value="<?php echo $k ?>"<?php echo ($k == get_option('wp_seo_key_' .$key)) ? ' selected="selected"' : '' ?>><?php echo $v ?><?php echo $warn ?></option>
<?php } ?>
</select>
</div>
</li>
<?php } ?>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_counter') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_counter_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_key_counter') ?>
</div>
<div>
<select name="wp_seo_key_counter" disabled="disabled">
<?php for ($k = 4; $k <= 30; $k = $k + 2) { ?>
<option value="<?php echo $k ?>"<?php echo ($k == get_option('wp_seo_key_counter')) ? ' selected="selected"' : '' ?>><?php echo $k ?></option>
<?php } ?>
</select>
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_length') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_length_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_key_length_chars') ?>
</div>
<div>
<select name="wp_seo_key_length" disabled="disabled">
<?php for ($k = 1; $k <= 10; $k ++) { ?>
<option value="<?php echo $k ?>"<?php echo ($k == get_option('wp_seo_key_length')) ? ' selected="selected"' : '' ?>><?php echo $k ?></option>
<?php } ?>
</select>
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_blacklist') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_blacklist_info') ?></small>
</li>
<li>
<div class="left">
<?php echo $this->get_translated_string('wp_seo_key_blacklist') ?>
</div>
<div>
<textarea name="wp_seo_key_blacklist" disabled="disabled"><?php echo $this->get_htmlentities_encode(get_option('wp_seo_key_blacklist'), true, true) ?></textarea>
</div>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_completion') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_completion_info') ?></small>
</li>
<li>
<label for="wp_seo_key_complete">
<input type="checkbox" name="wp_seo_key_complete" id="wp_seo_key_complete" value="1"<?php echo (get_option('wp_seo_key_complete')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_completion_on') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_substantive') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_substantive_info') ?></small>
</li>
<li>
<label for="wp_seo_key_substantive">
<input type="checkbox" name="wp_seo_key_substantive" id="wp_seo_key_substantive" value="1"<?php echo (get_option('wp_seo_key_substantive')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_substantive_on') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_relevance') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_relevance_info') ?></small>
</li>
<li>
<label for="wp_seo_key_relevance">
<input type="checkbox" name="wp_seo_key_relevance" id="wp_seo_key_relevance" value="1"<?php echo (get_option('wp_seo_key_relevance')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_relevance_on') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_labeling') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_labeling_info') ?></small>
</li>
<li>
<label for="wp_seo_key_labeling">
<input type="checkbox" name="wp_seo_key_labeling" id="wp_seo_key_labeling" value="1"<?php echo (get_option('wp_seo_key_labeling')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_labeling_on') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_xhtml') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_xhtml_info') ?></small>
</li>
<li>
<label for="wp_seo_key_xhtml">
<input type="checkbox" name="wp_seo_key_xhtml" id="wp_seo_key_xhtml" value="1"<?php echo (get_option('wp_seo_key_xhtml')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_xhtml_on') ?>
</label>
</li>
</ul>
<ul>
<li>
<strong><?php echo $this->get_translated_string('wp_seo_key_manually') ?></strong>
<small><?php echo $this->get_translated_string('wp_seo_key_manually_info') ?></small>
</li>
<li>
<label for="wp_seo_key_manually">
<input type="checkbox" name="wp_seo_key_manually" id="wp_seo_key_manually" value="1"<?php echo (get_option('wp_seo_key_manually')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_key_manually_on') ?>
</label>
</li>
</ul>
</fieldset>
<p class="submit">
<input type="submit" value="<?php echo $this->get_translated_string('wp_seo_update') ?> &raquo;" />
</p>
<?php if (get_option('wp_seo_key_enable')) { ?>
<script type="text/javascript">
enable_options('key', true);
</script>
<?php } ?>
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_misc_settings') ?>
</legend>
<ul>
<li>
<label for="wp_seo_misc_section">
<input type="checkbox" name="wp_seo_misc_section" id="wp_seo_misc_section" value="1"<?php echo (get_option('wp_seo_misc_section')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_section') ?>
</label>
</li>
<li>
<label for="wp_seo_misc_robots">
<input type="checkbox" name="wp_seo_misc_robots" id="wp_seo_misc_robots" value="1"<?php echo (get_option('wp_seo_misc_robots')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_robots') ?>
</label>
</li>
<li>
<label for="wp_seo_misc_noodp">
<input type="checkbox" name="wp_seo_misc_noodp" id="wp_seo_misc_noodp" value="1"<?php echo (get_option('wp_seo_misc_noodp')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_noodp') ?>
</label>
</li>
<li>
<label for="wp_seo_misc_clean">
<input type="checkbox" name="wp_seo_misc_clean" id="wp_seo_misc_clean" value="1"<?php echo (get_option('wp_seo_misc_clean')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_clean') ?>
</label>
</li>
<li>
<label for="wp_seo_misc_feed">
<input type="checkbox" name="wp_seo_misc_feed" id="wp_seo_misc_feed" value="1"<?php echo (get_option('wp_seo_misc_feed')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_feed') ?>
</label>
</li>
<li>
<label for="wp_seo_misc_attachment">
<input type="checkbox" name="wp_seo_misc_attachment" id="wp_seo_misc_attachment" value="1"<?php echo (get_option('wp_seo_misc_attachment')) ? ' checked="checked"' : '' ?> />
<?php echo $this->get_translated_string('wp_seo_misc_attachment') ?>
</label>
</li>
</ul>
</fieldset>
<p class="submit">
<input type="submit" value="<?php echo $this->get_translated_string('wp_seo_update') ?> &raquo;" />
</p>
</form>
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_compatibility_settings') ?>
</legend>
<ul>
<li>
<a href="<?php echo $_SERVER['REQUEST_URI'] ?>&action=compatibility"><?php echo $this->get_translated_string('wp_seo_compatibility_start') ?></a>
</li>
</ul>
</fieldset>
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_export_settings') ?>
</legend>
<ul>
<li>
<a href="<?php echo $_SERVER['REQUEST_URI'] ?>&action=export"><?php echo $this->get_translated_string('wp_seo_export_start') ?></a>
</li>
</ul>
</fieldset>
<form name="wp_seo_export" action="" method="post" enctype="multipart/form-data">
<fieldset class="options">
<legend>
<?php echo $this->get_translated_string('wp_seo_import_settings') ?>
</legend>
<ul>
<li>
<input type="file" name="xml" />
</li>
<li class="submit" style="float:left">
<input type="submit" value="<?php echo $this->get_translated_string('wp_seo_import_start') ?> &raquo;" />
</li>
</ul>
</fieldset>
</form>
</div>
<?php }
}
$GLOBALS['wpSEO'] = new wpSEO();
?>