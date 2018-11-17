<?php get_header(); ?>

      

    

    <section >
        <div class="container">
            <?php if (have_posts()): ?>         

                <?php while(have_posts()): the_post();        
                
                    $date = sprintf('<time class"entry-date" datetime="%1$s">%2$s</time',esc_attr(get_the_date('c')),esc_html(get_the_date())
                    );

                ?>

                    <div class="row m-dw-30">                        
                        <div class="col-xs-12">
                            <h1><?php the_title(); ?></h1>
                            <p>publié le <?php echo $date?>,dans la catégorie <?php the_category(', ');?></p>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    
                <?php endwhile; ?>

                <div class="row">
                    <div class="col-xs-12">
                        <nav>
                            <ul class="machin-pager">
                                <li class="pull-left"><?php previous_post_link(); ?></li>
                                <li class="pull-right"><?php next_post_link(); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        
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