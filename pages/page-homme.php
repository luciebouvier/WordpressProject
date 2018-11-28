<?php
/*
Template Name: Homme
*/
?>
<?php get_header(); ?>    

<section >
    <div class="container">
        <?php

            // The Query
            $args = array(
                'post_type' => 'produit',
                'posts_per_page' => 10 ,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Genre',
                        'field'    => 'slug',
                        'terms'    => 'homme',
                    ),
                ),
              );
            $the_query = new WP_Query( $args );

            if($the_query -> have_posts())
            {
              while($the_query -> have_posts())
              {
                $the_query -> the_post();
              ?>
            <div class="col-md-4 col-sm-6" style="float:left;">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('produit-thumb', array(
                            "class" => "img-fluid",
                            "alt"   => get_the_title(),
                            ) ); ?>
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="">Ajouter à mon panier</a>
                    </div>
                    <div class="product-content">
                        <h3 style="text-align:left;font-size:80%;"><a style="color:black;" href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
                        <p  style="text-align:left;font-size:100%;font-weight:bold;"><?php the_field('consomation')?> L CO2</p>
                    </div>
                </div>
            </div>
              <?php
              }
            }
            else{
              echo '<p>Pas d\'item dans le portfolio</p>';
            }
            wp_reset_postdata();
          ?>
    </div>
</section> 
<div style="clear:both;"> </div>


<?php get_footer(); ?> 