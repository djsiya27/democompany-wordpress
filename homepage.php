<?php get_header();
/*
* Template Name: Homepage
*/
?>


    <div class="container post-content">
            <div class="row post-row">
                <div class="col-md-auto">
                    
                        <div class="box1">
                        <?php
                            if ( $post->post_parent ) {
                                $children = wp_list_pages( array(
                                    'title_li' => '',
                                    'child_of' => $post->post_parent,
                                    'echo'     => 0
                                ) );
                                $title = get_the_title( $post->post_parent );
                            } else {
                                $children = wp_list_pages( array(
                                    'title_li' => '',
                                    'child_of' => $post->ID,
                                    'echo'     => 0
                                ) );
                            }
                            
                            if ( $children ) : ?>
                                <h2><?php echo $title; ?></h2>
                                <ul>
                                    <?php echo $children; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    
                </div>


                <?php  

                    $page_query = new WP_Query(array( 'post_type' => 'page', 'post__in' => array( 173, 180, 184) ) ); 
                
                    if($page_query->have_posts()) : while($page_query->have_posts()) : $page_query->the_post();
                
                ?>
            
            
                <div class="col-md-3">
                    
                        <div class="box">
                            <div class="image">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="post-heading">
                                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                            </div>
                            <p class="post-para"><?php the_excerpt(); ?></p></div>
                    </div>
                    <?php endwhile;  ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
        </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
    
   <?php get_footer();?>