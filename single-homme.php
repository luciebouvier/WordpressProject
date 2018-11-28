<?php get_header(); ?>

      

    

    <section >
        <div class="container">
            <?php if (have_posts()): ?>         

                <?php while(have_posts()): the_post();        
                
                ?>

                    <div class="row">
                        <div class="col-2">
                            <?php 
                            

                            $images = get_field('photos_galerie');
                            
                            if( $images ): ?>
                                <ul>
                                    <?php foreach( $images as $image ): ?>
                                        <li>
                                            <a href="<?php echo $image['url']; ?>">
                                                 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </a>
                                            <p><?php echo $image['caption']; ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="col">
                        <?php
                            $image = get_field('photo_principale');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)

                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );

                            }
                            ?>                        
                        </div>
                        <div class="col-5">
                            <h2 class="maj" style="font-size:200%; color:black;text-align:left;">  <?php the_title(); ?> </h2>                            
                            <p style="font-weight:bold;font-size:175%;"><?php the_field("consomation"); ?> L C02</p>
                            <p>Taille: </p>
                            <div class="form-check-inline" >                            
                            <label class="form-check-label">                                
                                <input type="radio" class="form-check-input" name="optradio"> 36
                            </label>
                            </div>
                            <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio"> 38
                            </label>
                            </div>
                            <div class="form-check-inline ">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" > 40
                            </label>
                            </div>
                            <div class="form-check-inline ">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" > 42
                            </label>
                            </div>
                            <div style="padding-top:20px;">
                            <button type="button"  class="btn btn-dark" style="text-transform:uppercase;">Achetez quand même ? </button>
                            </div>
                            
                            <p style="font-weight:bold;font-size:80%;padding-top:20px;"><?php the_title() ?></p>
                            <p style="font-size:80%;"><?php the_field('description_du_produit') ?></p>

                            <div style="border-top:solid;border-bottom:solid;padding-top:20px;padding-bottom:20px; margin-top:50px;">
                                <h3 class="maj">Livraison</h3>
                                <img src="<?php echo THEME_URL; ?>/assets/images/map.gif" width="100%" height="auto" >
                            </div>
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