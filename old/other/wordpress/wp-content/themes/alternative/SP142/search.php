<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) :  ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
                <div class="post-top">
                    <div class="post-title">
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php if ( function_exists('the_title_attribute')) the_title_attribute(); else the_title(); ?>"><?php the_title(); ?></a></h2>
                        <h3>
                        	Filed Under (<span><?php the_category(', ') ?></span>) by <span><?php the_author() ?></span> on <?php the_time('d-m-Y') ?>
                        </h3>
						<?php if ( function_exists('the_tags')) the_tags('<h4>Tagged Under : <span>', ', ', ' </span></h4>'); ?>
                    </div>
                </div>

				<div class="entry clear">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

                <div class="postmetadata">
                    <div class="alignleft">
						<?php comments_popup_link('<span>0</span> Comments', '<span>1</span> Comment', '<span>%</span> Comments'); ?>
                    </div>
                    <div class="alignright">
                    	<?php edit_post_link('Edit', '', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
                        <a class="readmore" href="<?php the_permalink() ?>" ><span>Read More</span></a>
                    </div>
                </div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>