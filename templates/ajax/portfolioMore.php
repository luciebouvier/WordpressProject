<?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => $pagination,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) : 
    ?>
        <div class="my-posts">
            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
            <div class="container" style="margin-top:50px;">
            <div class="post">
                <div style="float:left;">
                    <?php if ($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'thumbnail')):
                                $thumbnail_src = $thumbnail_html['0'];?>
                                <img class="img-responsive img-thumbnail" src="<?php echo $thumbnail_src; ?>" alt="">
                                <?php endif; ?>
                </div>
                <div style="float:left;">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <small><?php the_time('F jS, Y'); ?></small>

                <div class="entry">
                <?php the_excerpt();?>
                </div>
                </div>
                <div style="clear:both;"></div>
                
                
                </div> <!-- fin du premier bloc div -->
                            </div>
            <?php endwhile ?>
            
        </div>
    <?php endif 
  wp_reset_postdata();
?>