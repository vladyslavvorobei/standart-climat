<?php
function portfolio_post_type() {

  $labels = array(
    'name'                  => _x( 'Кейсы', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Кейсы', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Кейсы', 'ith' ),
    'name_admin_bar'        => __( 'Кейсы', 'ith' ),
    'archives'              => __( 'Кейсы', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Кейсы', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'taxonomies'            => array( 'posrtfolio_cat' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );


function eng_sys_post_type() {

  $labels = array(
    'name'                  => _x( 'Инженерные системы', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Инженерные системы', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Инженерные системы', 'ith' ),
    'name_admin_bar'        => __( 'Инженерные системы', 'ith' ),
    'archives'              => __( 'Инженерные системы', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Инженерные системы', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'eng_sys', $args );

}
add_action( 'init', 'eng_sys_post_type', 0 );


function services_post_type() {

  $labels = array(
    'name'                  => _x( 'Услуги', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Услуга', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Услуги', 'ith' ),
    'name_admin_bar'        => __( 'Услуги', 'ith' ),
    'archives'              => __( 'Услуги', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Услуга', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-list-view',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'services', $args );

}
add_action( 'init', 'services_post_type', 0 );