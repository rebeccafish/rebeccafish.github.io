<div id="sidebar">

<div id="searchdiv">
 <form id="searchform" method="get" action="/index.php">
  <input style="text-align:right;padding:5px;font-size:12px;color:#999;font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma, Helvetica, Verdana, sans-serif;" type="text" name="s" id="s" size="22"
value="Search" onblur="setTimeout('closeResults()',2000); if (this.value == '') {this.value = '';}"  onfocus="if (this.value == 'Search') {this.value = '';}" />
<div style="visibility:hidden"> <input name="sbutt" type="submit" value="Find" alt="Submit"  /></div>
</form></div>


<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 <h2>Feeds</h2>
  <ul id="feed">
   <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">RSS Articles</a></li>   
  </ul>
 <h2>Monthly Archives</h2>
  <ul><?php wp_get_archives('type=monthly'); ?></ul>
 <h2>Categories</h2>
  <ul><?php wp_list_cats(); ?></ul></div>
<?php endif; ?>

</div>


</div>
