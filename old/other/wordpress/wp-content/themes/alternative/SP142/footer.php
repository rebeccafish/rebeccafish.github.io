
            
        </div>
    </div>

	<div id="body_right">
    	<div id="body_right_content">
        	
            <div id="right_ads">
            	<div>
                	<a href="#"><img src="<?php bloginfo('template_url')?>/images/!ads.gif" alt="ads" /></a>
                </div>
            	<div class="right">
                	<a href="#"><img src="<?php bloginfo('template_url')?>/images/!ads.gif" alt="ads" /></a>
                </div>
            	<div>
                	<a href="#"><img src="<?php bloginfo('template_url')?>/images/!ads.gif" alt="ads" /></a>
                </div>
            	<div class="right">
                	<a href="#"><img src="<?php bloginfo('template_url')?>/images/!ads.gif" alt="ads" /></a>
                </div>
            </div>
            <div class="clear"></div>	
            		
			<?php if ( function_exists('wp_tag_cloud') ) : ?>
            <div id="right_tags">
                <h2>tag cloud</h2>
                <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
            </div>
			<?php endif; ?>
            
            <div id="sidebars">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>

</div>
</div>

<div id="footer">
	<div id="footer_text">
    	<a href="http://www.askgraphics.com/">Website Design</a> by AskGraphics.com | <a href="http://www.businesshostingsearch.com/">Business Web Hosting</a> | <a href="http://www.bestwebsitehosting.com/">Best website Hosting</a> | <a href="http://www.worldbeerdirectory.com/">beer</a>	
		
    </div>
	<div id="footer_ask">
    	&copy; All Rights Reserved. <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>	
    </div>
    <div class="clear"></div>
      
</div>



		<?php wp_footer(); ?>


</div>
</body>
</html>
