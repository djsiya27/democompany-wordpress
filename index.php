<?php get_header(); ?>


     <div class="container">
         <div class="row">
            <div class="col-md-10">
        
                <?php    if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title(  ); ?></h2>
                        <div class="image p-3 w-100 d-block"><?php the_post_thumbnail(); ?></div>
                        <p><?php the_content(); ?></p>
                        <?php   endwhile; ?>
                    
                <?php  endif; ?>
            </div>
        </div>
            
    </div>

<?php get_footer(); ?>