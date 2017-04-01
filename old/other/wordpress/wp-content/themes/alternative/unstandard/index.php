<?php get_header(); ?>
<div class="home fix">
	<div class="left">
		<div class="recent-leads fix">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="secondary-post-bg left">
						<p class="post-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
						<?php if (get_post_meta($post->ID, 'secondary_image', true)): ?>
							<?php $image = get_post_meta($post->ID, 'secondary_image', true); ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img width="293" height="150" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" /></a>
						<?php else: ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img width="293" height="150" src="<?php bloginfo('template_directory'); ?>/images/img-holder-small.gif" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="" /></a>
						<div class="title-insert">
							<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h3>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="entry navigation fix">
					<br class="clear" />
					<p class="left"><?php previous_posts_link('&laquo; previous'); ?></p><p class="right"><?php next_posts_link('next &raquo;'); ?></p>
				</div>
				<?php else : ?>
				<div class="post single">
					<h2>No matching results</h2>
					<div class="entry">
						<p>You seem to have found a mis-linked page or search query with no associated or related results.</p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="right">
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
</div>
<?php include (TEMPLATEPATH . '/show_categories.php'); ?>
<?php get_footer(); ?>