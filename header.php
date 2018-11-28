<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">


        












            
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">

                <a class="navbar-brand" href="/wordpress">Céres</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Homme <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Femme <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Don <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Panier <span class="sr-only">(current)</span></a>
                    </li>


            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" >
                <a style="padding-right:220px;" class="navbar-brand" href="/wordpress"><img src="<?php echo THEME_URL; ?>/assets/images/Logo.png" height="25px" width="auto"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                                          
                            <?php // SYNTAXE : wp_nav_menu( array $args = array() )
                                $args=array(
                                    'theme_location' => 'header', // nom du slug
                                    'menu' => 'header_fr', // nom à donner cette occurence du menu
                                    'menu_class' => 'menu_header', // class à attribuer au menu
                                    'menu_id' => 'menu_id' // id à attribuer au menu
                                    // voir les autres arguments possibles sur le codex
                                );
                                wp_nav_menu($args);
                            ?>                  

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
                            <a class="nav-link" href="#"> <img src="<?php echo THEME_URL; ?>/assets/images/basket.png" height="50" width="auto" > <span class="sr-only">(current)</span></a>
                            
                        </li>   
                        </ul>
                        

                    
                </div>

            </nav>
            
           
            </nav>
            <div  style="font-size: 100%;  background-color: white;">
                <p class="maj" style="text-align:center;"> <span _moz_dirty style="font-weight: bold;"> Livraison et retour gratuits </span> sur toute la planète jusqu'a ce qu'elle s'épuise </p>    
            </div>

            <!--<div  style="padding-bottom:1px;font-size: 50px;  font-weight: bold; background-color:#3afdec;color:white; text-align:center; ">
                <p class="maj" style="text-align:center; font-size:50%;width:50%;margin-left:25%;">  -30% sur toutes les emissions de co2 avec le code : #climat  </p> 
                   
            </div>-->
            <div style="margin:0;padding:0;">
            <img src="<?php echo THEME_URL; ?>/assets/images/Promo.png" width="100%" height="auto" > 
            </div>

            
        </header>