<?php get_header(); ?>

<?php if ( have_posts() )
	the_post();?>
<h1 class="title"> by <?php the_author(); ?></h1>


<?php rewind_posts(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="teaser">
		<a href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?></a>
	</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>