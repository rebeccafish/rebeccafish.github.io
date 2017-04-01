<?php
get_header();
?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (have_posts()) : ?>
  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
  <?php 
	if (is_category()) { ?>
  <h2 class='archives'>Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
<br>
  <?php }
	 
	elseif (is_day()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('F jS, Y'); ?>
  </h2>
  <?php }
	
	elseif (is_month()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('F, Y'); ?>
  </h2>
  <?php } 
	
	elseif (is_year()) { ?>
  <h2 class='archives'>Archive for
    <?php the_time('Y'); ?>
  </h2>
  <?php } 
	
	elseif (is_author()) { ?>
  <h2 class='archives'>Author Archive</h2>
  <?php }
	 
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2>Blog Archives</h2>
    <?php } ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="entry">
    <h3 class="entrytitle" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
      </a> <span id="commentlink"><?php comments_popup_link('0','1','%'); ?></span></h3>
<div class="entrymeta">
      Posted <?php 
			the_time('F j, Y ');
			$comments_img_link= '<img src="' . get_stylesheet_directory_uri() . '/images/comments.gif"  title="comments" alt="*" /><strong>';	
			edit_post_link(__(' Edit'));?>
      </strong> </div>
    <div class="entrybody">
      <?php the_content(__('Read more &raquo;'));?>
    </div>
    <!--
	<?php trackback_rdf(); ?>
	-->
  </div>
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
