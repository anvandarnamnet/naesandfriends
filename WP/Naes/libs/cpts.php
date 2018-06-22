<?php
//Register wordpress custom post types
function custom_post_type() {

    $labels = array(
        'name'               => _x( 'Blogginlägg', 'blog-post' ),
        'singular_name'      => _x( 'Blogginlägg', 'blog-post' ),
        'add_new'            => _x( 'Lägg till nytt', 'blog-post' ),
        'add_new_item'       => __( 'Lägg till nytt blogginlägg' ),
        'edit_item'          => __( 'Redigera inlägg' ),
        'new_item'           => __( 'Nytt Blogginlägg' ),
        'all_items'          => __( 'Alla blogginlägg' ),
        'view_item'          => __( 'Visa inlägg' ),
        'search_items'       => __( 'Sök inlägg' ),
        'not_found'          => __( 'Inga inlägg hittades' ),
        'not_found_in_trash' => __( 'Inga inlägg finns i Soptunnan' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Blogginlägg'
      );

      $args = array(
        'labels'        => $labels,
        'description'   => 'Blogginlägg',
        'public'        => true,
        'menu_position' => 4,
        'supports'      => array( 'title', 'custom-fields'),
        'has_archive'   => true,
        'rewrite' => array( 'slug' => 'blog' ),
      );

    register_post_type( 'blog-post', $args );


    $labels = array(
      'name'               => _x( 'Services', 'blog-post' ),
      'singular_name'      => _x( 'Service', 'blog-post' ),
      'add_new'            => _x( 'Lägg till nytt', 'blog-post' ),
      'add_new_item'       => __( 'Lägg till ny service' ),
      'edit_item'          => __( 'Redigera inlägg' ),
      'new_item'           => __( 'Ny service' ),
      'all_items'          => __( 'Alla services' ),
      'view_item'          => __( 'Visa services' ),
      'search_items'       => __( 'Sök services' ),
      'not_found'          => __( 'Inga services hittades' ),
      'not_found_in_trash' => __( 'Inga services finns i Soptunnan' ),
      'parent_item_colon'  => '',
      'menu_name'          => 'Services'
    );

    $args = array(
      'labels'        => $labels,
      'description'   => 'Services',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'custom-fields'),
      'has_archive'   => true,
      'rewrite' => array( 'slug' => 'service' ),
    );

  register_post_type( 'service', $args );

  $labels = array(
    'name'               => _x( 'Skills', 'blog-post' ),
    'singular_name'      => _x( 'Skill', 'blog-post' ),
    'add_new'            => _x( 'Lägg till ny', 'blog-post' ),
    'add_new_item'       => __( 'Lägg till ny Skill' ),
    'edit_item'          => __( 'Redigera skill' ),
    'new_item'           => __( 'Ny skill' ),
    'all_items'          => __( 'Alla skills' ),
    'view_item'          => __( 'Visa skill' ),
    'search_items'       => __( 'Sök skills' ),
    'not_found'          => __( 'Inga skills hittades' ),
    'not_found_in_trash' => __( 'Inga skills finns i Soptunnan' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Skills'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Services',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'custom-fields'),
    'has_archive'   => true,
    'rewrite' => array( 'slug' => 'skill' ),
  );

register_post_type( 'skill', $args );

    }
  add_action( 'init', 'custom_post_type', 0 );


function create_custom_taxonomies(){
  $labels = array(
    'name' => _x( 'Bloggkategori', 'taxonomy general name' ),
    'singular_name' => _x( 'Kategori', 'taxonomy singular name' ),
    'search_items' =>  __( 'Sök kategorier' ),
    'all_items' => __( 'Alla kategorier' ),
    'parent_item' => __( 'Parent kategori' ),
    'parent_item_colon' => __( 'Parent kategori:' ),
    'edit_item' => __( 'Redigera kategori' ), 
    'update_item' => __( 'uppdatera kategori' ),
    'add_new_item' => __( 'Skapa ny kategori' ),
    'new_item_name' => __( 'Ny kategori namn' ),
    'menu_name' => __( 'Kategorier' ),
  );    
 
  register_taxonomy('blog-cat',array('blog-post'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'kategori' ),
  ));


  $labels = array(
    'name' => _x( 'Innehållstyp', 'taxonomy general name' ),
    'singular_name' => _x( 'Innehållstyp', 'taxonomy singular name' ),
    'search_items' =>  __( 'Sök innehållstyp' ),
    'all_items' => __( 'Alla innehållstyper' ),
    'parent_item' => __( 'Parent innehållstyp' ),
    'parent_item_colon' => __( 'Parent innehållstyp:' ),
    'edit_item' => __( 'Redigera innehållstyp' ), 
    'update_item' => __( 'uppdatera innehållstyp' ),
    'add_new_item' => __( 'Skapa ny innehållstyp' ),
    'new_item_name' => __( 'Ny innehållstyp' ),
    'menu_name' => __( 'Innehållstyper' ),
  );    
 
  register_taxonomy('content-type',array('blog-post'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'content-type' ),
  ));

  $labels = array(
    'name' => _x( 'Författare', 'taxonomy general name' ),
    'singular_name' => _x( 'Författare', 'taxonomy singular name' ),
    'search_items' =>  __( 'Sök författare' ),
    'all_items' => __( 'Alla författare' ),
    'parent_item' => __( 'Parent författare' ),
    'parent_item_colon' => __( 'Parent författare:' ),
    'edit_item' => __( 'Redigera författare' ), 
    'update_item' => __( 'uppdatera författare' ),
    'add_new_item' => __( 'Skapa ny författare' ),
    'new_item_name' => __( 'Ny författare' ),
    'menu_name' => __( 'Författare' ),
  );    
 
  register_taxonomy('authors',array('blog-post'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'authors' ),
  ));
}
add_action( 'init', 'create_custom_taxonomies', 0 );
 ?>
