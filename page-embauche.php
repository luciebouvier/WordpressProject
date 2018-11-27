<?php get_header(); ?>


<div class="entry-content">
    <?php 
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '',
        'paged' => 1,
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) : 
    ?>
        <div class="my-posts">
            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
                <h2><?php the_title() ?></h2>
                <?php the_excerpt() ?>
            <?php endwhile ?>
        </div>
    <?php endif ?>
    


<?php get_footer(); ?> 