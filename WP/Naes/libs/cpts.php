<?php
//Register wordpress custom post types
function custom_post_type() {

    $labels = array(
        'name'               => _x( 'Produkter', 'products' ),
        'singular_name'      => _x( 'Produkt', 'products' ),
        'add_new'            => _x( 'Lägg till ny', 'products' ),
        'add_new_item'       => __( 'Lägg till ny Produkt' ),
        'edit_item'          => __( 'Redigera Produkt' ),
        'new_item'           => __( 'Ny Produkt' ),
        'all_items'          => __( 'Alla Produkter' ),
        'view_item'          => __( 'Visa Produkt' ),
        'search_items'       => __( 'Sök Produkter' ),
        'not_found'          => __( 'Inga Produkter hittades' ),
        'not_found_in_trash' => __( 'Inga Produkter finns i Soptunnan' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Produkter'
      );

      $args = array(
        'labels'        => $labels,
        'description'   => 'Våra Produkter',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'custom-fields'),
        'has_archive'   => true,
      );

    register_post_type( 'products', $args );

    }
    add_action( 'init', 'custom_post_type', 0 );
 ?>
