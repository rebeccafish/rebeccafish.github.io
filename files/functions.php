<?php
function get_title($page) {
    
    if ($page == "L&DStartup") { $page_title = "L&D Startup"; }
    else if ($page == "oneview") { $page_title = "OneView"; }
    else if ($page == "pioneer") { $page_title = "The Pioneer"; }
    else if ($page == "financial") { $page_title = "Financial App";}
    
    if ($page == "home") { return "Rebecca Fish"; }
    
    return "Rebecca Fish / ".$page_title;
}
?>