<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<?php $attachment_link = get_the_attachment_link($post->ID, true, array(450, 800)); // This also populates the iconsize for the next line ?>
<?php $_post = &get_post($post->ID); $classname = ($_post->iconsize[0] <= 128 ? 'small' : '') . 'attachment'; // This lets us style narrow icons specially ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                    	<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <h3>
                        	Filed Under (<span><?php the_category(', ') ?></span>) by <span><?php the_author() ?></span> on <?php the_time('d-m-Y') ?>
                        </h3>
						<?php if ( function_exists('the_tags')) the_tags('<h4>Tagged Under : <span>', ', ', ' </span></h4>'); ?>
                    </div>
                </div>

				<div class="entry clear">
                    <p class="<?php echo $classname; ?>"><?php echo $attachment_link; ?><br /><?php echo basename($post->guid); ?></p>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

                <div class="postmetadata">
                    <div class="alignleft">
						<a><?php comments_number('<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments'); ?></a>
                    </div>
                    <div class="alignright">
                    	<?php edit_post_link('Edit', '', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
                        <a class="readmore" href="<?php the_permalink() ?>" ><span>Read More</span></a>
                    </div>
                </div>
			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
