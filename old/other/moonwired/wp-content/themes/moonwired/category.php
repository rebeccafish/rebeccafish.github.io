<?php get_header(); ?>

<h1 class="title"> <?php single_cat_title(); ?></h1>
<?php //date of category ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="teaser">
		<div class="article">
		<h2 class="article_title"><a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?></a></h2>
		<span class="author">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
			<?php the_author(); ?>
		</a></span>
		
		<?php the_excerpt(); ?> </div>
	</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>