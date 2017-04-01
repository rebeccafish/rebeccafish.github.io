<?php
get_header();
?>
<?php get_sidebar(); ?>
<div id="content">
  <?php //include("wp-content/adsense.txt");?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="entry">
    <h3 class="entrytitle" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
      </a> <span id="commentlink"><?php comments_popup_link('0','1','%'); ?></span></h3>
<div class="entrymeta">
     Posted <?php 
			the_time('F j, Y ');
			$comments_img_link= '<img src="' . get_stylesheet_directory_uri() . '/images/comments.gif"  title="comments" alt="*" />';	
 if (function_exists('enp_edit_link')) { enp_edit_link(__(' Edit This')); }
else { edit_post_link(__('Edit This')); } ?>	
      </div>
    <div class="entrybody">
      <?php the_content(__('Read more &raquo;'));?>
    </div>
    <!--
	<?php trackback_rdf(); ?>
	-->
  </div>
  <?php comments_template(); // Get wp-comments.php template ?>
  <?php endwhile; else: ?>
  <p>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  </p>
  <?php endif; ?>
  <p>
    <?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
  </p>
</div>
<?php get_footer(); ?>
