<!-- Begin #sidebar -->
<div id="sidebar"><div id="sidebar2">
  
  
  <!-- Begin #profile-container -->

<?php bloginfo('description'); ?>
  <!-- End #profile -->

<ul><li></li></ul>

  <h2 class="sidebar-title">Categories</h2>

<form action="<?php echo $PHP_SELF ?>" method="get">
<p style="padding: 0px; margin: 0px;"><?php dropdown_cats(); ?>
<input type="submit" name="submit" value="GO" /></p>
</form>

  <h2 class="sidebar-title">Archives</h2>

<form id="archiveform" action="<?php echo $PHP_SELF ?>" method="post">
<p style="margin: 0px; padding: 0px;"><select id="archive_chrono">
<option value="">Archives by Month</option>
<?php get_archives("monthly","","option","","",false); ?>
</select>
<input type="button" value="Go" onclick="window.location = (document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);" /></p>
</form>
  

<h2 class="sidebar-title">Search</h2>
<form style="padding: 0px; margin-top: 0px; margin-bottom: 0px;" id="searchform" method="get" action="<?php bloginfo('url'); ?>">
<p style="padding: 0px; margin-top: 0px; margin-bottom: 0px;"><input type="text" class="input" name="s" id="search" alt="Search" size="15" />
<input name="submit" type="submit" tabindex="5" value="<?php _e('GO'); ?>" /></p>
</form>

<ul><li></li></ul>

<h2 class="sidebar-title">Blogroll</h2>
<?php get_links('-1', '', '<br />', '<br />', 0, 'name', 0, 0, -1, 0); ?> 

<ul><li></li></ul>

<p class="post-footer">
<em><a href="http://www.wordpressfirewall.com">Wordpress Firewall</a> (<a href="http://www.firewallscript.com">*</a>)
</em></p>

<ul><li></li></ul>
  
<p class="post-footer"><em><a href="<?php bloginfo('url'); ?>/feed/" title="Syndicate this site using RSS">RSS</a> <a href="http://validator.w3.org/check/referer">XHTML</a> <a class="footerLink" href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> <a href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=<?php bloginfo('url'); ?>">508</a></em></p>
  
<ul><li></li></ul>

</div></div>
<!-- End #sidebar -->


</div>
<!-- End #content -->




