<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h1 class="title"><?php the_title(); ?></h1>
	<div class="article"><?php the_content(); ?></div>
	
	<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
	<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	
<?php endwhile; endif; ?>

<?php get_sidebar('page'); ?>


<?php get_footer(); ?>