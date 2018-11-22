<?php get_header(); ?>

      

    

    <section >
        <div class="container">
            <?php if (have_posts()): ?>         

                <?php while(have_posts()): the_post();        
                
                ?>

                    <div class="row m-dw-30">
                        <div class="col-xs-2">

                            <?php if ($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'thumbnail')):
                            $thumbnail_src = $thumbnail_html['0'];?>
                            <img class="img-responsive img-thumbnail" src="<?php echo $thumbnail_src; ?>" alt="">
                            <?php endif; ?>
                        
                        </div>
                        <div class="col-xs-10">
                            <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    
                <?php endwhile; ?>
        
            <?php else: ?>            
                <div class="row m-dw-30">                    
                    <div class="col-xs-12">                        
                        <p>Il n'y a pas de résultat</p>
                    </div>
                </div>
                

            <?php endif; ?>
        </div>
    </section> 


<?php get_footer(); ?> 