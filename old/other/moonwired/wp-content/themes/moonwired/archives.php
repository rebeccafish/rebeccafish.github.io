<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php

$cats_already_displayed = array();
while (get_last_issue_id($cats_already_displayed) != NULL) {
	$next_issue = get_last_issue_id($cats_already_displayed); ?>
	<div class="clear"></div> 
	<h1 class="title"><?php echo get_cat_name($next_issue);?></h1>
	
	<?php
	$next_issue_posts = new WP_Query();
	$next_issue_posts->query('cat='.$next_issue); 
		while($next_issue_posts->have_posts()) : $next_issue_posts->the_post(); ?>
			<div class="teaser">
				
				<div class="article">
				<h2 class="article_title"><a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?></a></h2>
				<span class="author">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
					<?php the_author(); ?>
				</a></span>
				
				<?php the_excerpt(); ?> </div>
			</div>
		<?php endwhile;
	
	$cats_already_displayed[] = $next_issue;
}

?>
<?php get_footer(); ?>