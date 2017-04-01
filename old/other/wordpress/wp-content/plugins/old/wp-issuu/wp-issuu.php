<?php
/*
    Plugin Name: WP Issuu
    Description: Embed Issuu publications inside a post
    Version: 1.21
    Author: Yan Hong
*/

/*
    Copyright 2009  YAN HONG  (email : yan.hong.cn@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function issuu_parse($content)
{
	$content = preg_replace_callback("/\[issuu ([^]]*)\]/i", "issuu_render", $content);
	return $content;
}

function getValue($regex, $params, $default)
{
	preg_match_all($regex, $params, $matches);
	if (count($matches) > 1) {
		return $matches[1][0];
	} else {
		return $default;
	}
}

function issuu_render($matches)
{
	$folderid = getValue('/folderid=([\S]*)/i', $matches[1], '');
	$documentid = getValue('/documentid=([\S]*)/i', $matches[1], '');
    $username = getValue('/username=([\S]*)/i', $matches[1], '');
    $docname = getValue('/docname=([\S]*)/i', $matches[1], '');
	$loadinginfotext = getValue('/loadinginfotext=([\S]*)/i', $matches[1], '');
	$tag = getValue('/tag=([\S]*)/i', $matches[1], '');
    $showflipbtn = getValue('/showflipbtn=([\S]*)/i', $matches[1], 'false');
    $autoflip = getValue('/autoflip=([\S]*)/i', $matches[1], 'false');
    $autofliptime = getValue('/autofliptime=([\S]*)/i', $matches[1], 6000);
    $backgroundcolor = getValue('/backgroundcolor=([\S]*)/i', $matches[1], '');
    $layout = getValue('/layout=([\S]*)/i', $matches[1], '');
	$height = getValue('/height=([\S]*)/i', $matches[1], 301);
	$width = getValue('/width=([\S]*)/i', $matches[1], 450);
	$unit = 'px';//getValue('/unit=([\S]*)/i', $params, 'px');
	$viewmode = getValue('/viewmode=([\S]*)/i', $matches[1], '');
	$pagenumber = getValue('/pagenumber=([\S]*)/i', $matches[1], 1);
	$logo = getValue('/logo=([\S]*)/i', $matches[1], '');
	$logooffsetx = getValue('/logooffsetx=([\S]*)/i', $matches[1], 0);
	$logooffsety = getValue('/logooffsety=([\S]*)/i', $matches[1], 0);
	$showhtmllink = getValue('/showhtmllink=([\S]*)/i', $matches[1], 'false');
	
	$viewerurl = "http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf";
	$standaloneurl = "http://issuu.com/$username/docs/$docname?mode=embed";
	$moreurl = "http://issuu.com/search?q=$tag";
	
	$flashvars = "mode=embed";
	if ($folderid) {
		// load folder parameters
		$flashvars = "$flashvars&amp;folderId=$folderid";
	} else {
		// load document parameters
		if ($documentid) {
			$flashvars = "$flashvars&amp;documentId=$documentid";
		}
		if ($docname) {
			$flashvars = "$flashvars&amp;docName=$docname";
		}
		if ($username) {
			$flashvars = "$flashvars&amp;username=$username";
		}
		if ($loadinginfotext) {
			$flashvars = "$flashvars&amp;loadingInfoText=$loadinginfotext";
		}
	}
	if ($showflipbtn == "true") {
		$flashvars = "$flashvars&amp;showFlipBtn=true";
	}
	if ($autoflip == "true") {
		$flashvars = "$flashvars&amp;autoFlip=true";
		if ($autofliptime) {
			$flashvars = "$flashvars&amp;autoFlipTime=$autofliptime";
		}
	}
	if ($backgroundcolor) {
		$flashvars = "$flashvars&amp;backgroundColor=$backgroundcolor";
		$standaloneurl = "$standaloneurl&amp;backgroundColor=$backgroundcolor";
	}
	if ($layout) {
		$flashvars = "$flashvars&amp;layout=$layout";
		$standaloneurl = "$standaloneurl&amp;layout=$layout";
	}
	if ($viewmode) {
		$flashvars = "$flashvars&amp;viewMode=$viewmode";
		$standaloneurl = "$standaloneurl&amp;viewMode=$standaloneurl";
	}
	if ($pagenumber > 1) {
		$flashvars = "$flashvars&amp;pageNumber=$pagenumber";
		$standaloneurl = "$standaloneurl&amp;pageNumbe=$pagenumber";
	}
	if ($logo) {
		$flashvars = "$flashvars&amp;logo=$logo&amp;logoOffsetX=$logooffsetx&amp;logoOffsetY=$logooffsety";
		$standaloneurl = "$standaloneurl&amp;logo=$logo&amp;logoOffsetX=$logooffsetx&amp;logoOffsetY=$logooffsety";
	}
    
    return ( ($showhtmllink == 'true') ? '<div>' : '') . 
		   '<object style="width:' . $width . $unit . ';height:' . $height . $unit. '" ><param name="movie" value="' . $viewerurl . '?' . $flashvars . '" />' . 
		   '<param name="allowfullscreen" value="true"/><param name="menu" value="false"/>' . 
           '<embed src="' . $viewerurl . '" type="application/x-shockwave-flash" style="width:' . $width . $unit . ';height:' . $height . $unit . '" flashvars="' .
		   $flashvars . '" allowfullscreen="true" menu="false" /></object>' . 
		   ( ($showhtmllink == 'true') ? ( '<div style="width:' . $width . $unit . ';text-align:left;">' . 
		   ( $folderid ? '' : ('<a href="' . $standaloneurl . '" target="_blank">Open publication</a> - ') ) . 
		   'Free <a href="http://issuu.com" target="_blank">publishing</a>' . 
		   ( $folderid ? '' : ( $tag ? (' - <a href="' . $moreurl. '" target="_blank">More ' . urldecode($tag) . '</a>') : '' ) ) . '</div></div>' ) : '');
}

add_filter('the_content', 'issuu_parse');

?>