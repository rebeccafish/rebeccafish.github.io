<div id="middle-widgets" class="fix">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - Shared') ) : ?>
	<?php else: ?>
		<?php /* if sidebar widgets are not specified do something else here */ ?>
	<?php endif; ?>
</div>

<div id="footer">
  <p align="center"><a href="<?php echo get_settings('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a> - <a href="<?php bloginfo('rss2_url'); ?>">Content (RSS)</a> - <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> - <a href="http://5thirtyone.com/the-unstandard" title="Download The Unstandard theme">The Unstandard</a> theme</p>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>