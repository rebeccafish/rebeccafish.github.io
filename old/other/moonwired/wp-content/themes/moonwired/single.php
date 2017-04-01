<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?>
	<?php //next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?>
	
	<h1 class="title"><?php the_title(); ?></h1>
	<?php //posted_on(); ?>	
						
	
	<span class="author">by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
		<?php the_author(); ?>
	</a></span>
	
	<div class="article_nav">
		<span class="prev"> <?php previous_post_link(); ?> </span>
		<span class="next"><?php next_post_link(); ?> 	</span>
	</div>
	
	<div class="article"><?php the_content(); ?></div>
	
	<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

	<?php //if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
	
	<?php //echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
	<?php //printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
	
	<?php //the_author_meta( 'description' ); ?>
	<a href="<?php //echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
	<?php //printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>

	<?php //endif; ?>

	<?php //posted_in(); ?>
	<?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	
	<?php //previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?>
	<?php //next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?>				
	<?php //comments_template( '', true ); ?>

<?php endwhile; endif; // end of the loop. ?>



<?php //get_sidebar('single'); ?>

<?php get_footer(); ?>