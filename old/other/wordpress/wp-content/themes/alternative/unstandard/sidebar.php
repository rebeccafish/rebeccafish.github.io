<?php if ( is_single() ) { ?>
	<ul class="sidebar-nextprev fix">
		<li class="previous"><?php previous_post_link('%link', '<span>&laquo; Prev</span>') ?></li>
		<li class="next"><?php next_post_link('%link', '<span>Next &raquo;</span>') ?></li>
	</ul>
	<br /><br />
	<div class="search">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	<br /><br />
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar - Single') ) : ?>
	<?php else: ?>
		<?php /* if sidebar widgets are not specified do something else here */ ?>
	<?php endif; ?>
<?php } else { ?>
	<div class="search">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	<br /><br />
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar - Main') ) : ?>
	<?php else: ?>
		<h3 class="module-title">Most Recent</h3>
		<ul class="module-list">
			<?php /* will display 10 most recent posts */ wp_get_archives('type=postbypost&limit=10'); ?>
		</ul>
	<?php endif; ?>
<?php } ?>