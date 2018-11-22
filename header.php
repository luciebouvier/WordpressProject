<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" >

                
                    <a style="padding-right:200px;" class="navbar-brand" href="/wordpress"><img src="<?php echo THEME_URL; ?>/assets/images/Logo.png" height="25px" width="auto"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" class="lien-header">
                            <a class="nav-link" href="#">FEMME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOMME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">DON <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">CONTACT <span class="sr-only">(current)</span></a>
                        </li> 
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <img src="<?php echo THEME_URL; ?>/assets/images/basket.png" height="20px" width="auto" > <span class="sr-only">(current)</span></a>
                            
                        </li>   
                        </ul>              
                </div>
            </nav>
            <div  style="font-size: 100%;  background-color: white;">
                <p class="maj" style="text-align:center;"> <span _moz_dirty style="font-weight: bold;"> Livraison et retour gratuits </span> sur toute la planète jusqu'a ce qu'elle s'épuise </p>    
            </div>

            <!--<div  style="padding-bottom:1px;font-size: 50px;  font-weight: bold; background-color:#3afdec;color:white; text-align:center; ">
                <p class="maj" style="text-align:center; font-size:50%;width:50%;margin-left:25%;">  -30% sur toutes les emissions de co2 avec le code : #climat  </p> 
                   
            </div>-->
            <img src="<?php echo THEME_URL; ?>/assets/images/Promo.png" width="100%" height="auto" > 

            
        </header>