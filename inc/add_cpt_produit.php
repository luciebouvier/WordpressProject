<?php
add_action("init", "lgmac_add_produit_cpt");
function lgmac_add_produit_cpt()
{
  $post_type = "produit";
  $labels = array(
        'name'               => 'Produit',
        'singular_name'      => 'Produit',
        'all_items'          => 'Tous les produits',
        'add_new'            => 'Ajouter un produit',
        'add_new_item'       => 'Ajouter un produit',
        'edit_item'          => "Modifier un produit",
        'new_item'           => 'Nouveau produit',
        'view_item'          => "Voir le produit",
        'search_items'       => 'Chercher un produit',
        'not_found'          => 'Pas de produit',
        'not_found_in_trash' => 'Pas de produit',
        'parent_item_colon'  => 'Produit parent:',
        'menu_name'          => 'Produit',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', "excerpt", "custom-fields", "revisions" ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-hammer',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );

    $taxonomy = "Genre";
    $object_type = array("produit");
    $taxonomy_args = array(
          'label' => 'Genre',
          'rewrite' => array( 'slug' => 'genre-produit' ),
          'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $taxonomy_args );
}