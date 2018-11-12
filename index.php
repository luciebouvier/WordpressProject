<?php get_header(); ?>


    <div class="container">
        <div class="jumbotron">
            <h1>Coucou c'est nous</h1>
        </div>
    </div>

    <?php 

        wp_nav_menu( array(
            'menu'              => 'top-menu',
            'theme_location'    => 'primary'
            )
        );

    ?>

    <section>
        <div class="container">
            <?php if (have_posts()): ?>
            

                <?php while(have_posts()): the_post(); ?>

                    <div class="row m-dw-30">
                        <div class="col-xs-2">
                            <?php the_post_thumbnail('thumbnail');?>
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