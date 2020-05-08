<?php get_header(); ?>

     <div class="container"> 
        <?php    if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_title( '<h2>', '</h2>' ); ?>
            <?php the_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
            <?php   endwhile; ?>
        <?  else: ?>
        <?php  _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
        <?php  endif; ?>
    </div>

<?php get_footer(); ?>